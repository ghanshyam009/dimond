<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\chocolate;
use App\Models\lots;
use App\Models\packet;
use App\Models\LotDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Exception;
use DateTime;
use App\Models\image;
use App\Models\LotMove;
use App\Models\machine;
use CreateLotMovesTable;
use Format;
use Illuminate\Support\Facades\Storage;

class chocolatecontroller extends Controller
{
    public function chocolatedashboard(Request $request)
    {
        // $lotmoves = DB::table('lot_moves')
        //     ->where('status', 2)
        //     ->select(DB::raw('sum(height) as height1,lot_id,name,pcs,sum(weight) as weight1,sum(length) as length1,sum(height) as width1'))
        //     ->groupBy('lot_id', 'name', 'pcs')
        //     ->get();
        $now = Carbon::now();
        $lotmoves = DB::table('lot_moves')
            // ->where('status', 2)
            ->where('location_id', 1)
            ->select((DB::raw('lot_id,batch_id,bactches.name as batch_name,lot_masters.name as lot_name,sum(height) as height1,sum(weight) as weight1,sum(length) as length1,sum(width) as width,count(pcs) as pcs,start_timer,stop_timer')))
            ->leftJoin('lot_masters', 'lot_masters.id', '=', 'lot_moves.lot_id')
            ->leftJoin('bactches', 'bactches.id', '=', 'lot_moves.batch_id')
            ->groupBy('stop_timer', 'start_timer', 'lot_id', 'batch_id', 'bactches.name', 'lot_masters.name')
            ->get();
        // dd($lotmoves);


        // $data = DB::table('bactches')
        //     ->join('lot_details', 'lot_details.batch_id', '=', 'bactches.id')
        //     ->where('name', "like", "%" . $request->search . "%")->get();
        return view('admin.chocolatedashboard')->with(['lotmoves' => $lotmoves, 'now' => $now]);
    }
    public function createchocolatedashboard()
    {
        $now = Carbon::now();
        $date = Carbon::now()->format('H:i:m');
        $lot = DB::table('lot_masters')
            ->join('chocolates', 'chocolates.lotno', '=', 'lot_masters.id')
            ->get();
        return view('admin.createchocolatedashboard')->with(['now' => $now, 'date' => $date, 'lot' => $lot]);
    }
    public function insertchocolatedashboard(Request $request)
    {
        $chocolate = new chocolate;
        $chocolate->lotno = $request->get('mno');
        $chocolate->machineno = $request->get('machinename');
        $chocolate->startdate    = date('Y-m-d', strtotime($request->stime));
        $chocolate->starttime = date('H:i:s', strtotime($request->stime));
        $datetime = $chocolate->startdate . " " . $chocolate->starttime;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $chocolate->img1 = $filename;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_images', $filename);
            $chocolate->img2 = $filename;
        }
        if ($request->hasFile('img3')) {
            $file = $request->file('img3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images3', $filename);
            $chocolate->img3 = $filename;
        }
        $chocolate->save();

        // DB::table('lot_moves')->where('mname', $request->machinename)

        DB::table('machine')->where('mname', $request->machinename)
            ->update(['lotno' => $request->mno, 'timer' => $datetime, 'status' => 1, 'stop_timer' => null]);

        return redirect('createchocolatedashboard')->with(['message' => 'Insert chocolate Sucessfull!']);
    }

    public function startTimer(Request $request)
    {
        try {
            $check = LotDetail::where("id", $request->id)->whereNull('stop_timer')->first();
            if ($check) {
                LotDetail::where("id", $request->id)->update(['timer' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), ['success' => true]);
        }
    }

    public function stopTimer(Request $request)
    {
         dd($request);
        try {
            $check = LotDetail::where("lot_id", $request->id)->first();
            // dd($check);
            if ($check) {
                LotDetail::where("id", $request->id)->update(['stop_timer' => Carbon::now()->format('Y-m-d H:i:s')]);
                DB::table('chocolate_close')->insert(
                    [
                        'lot_id' => $request->id,
                        'processresons_id' => $request->processresons_id,
                        'user_id' => $request->user_id,
                        'growing_time' => $request->growing_time,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
                DB::table('machine')->where('lotno', $request->id)
                    ->update(['stop_timer' => $request->growing_time]);
            }
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), ['success' => true]);
        }
    }
    public function addchocolate()
    {

        return view('admin.addchocolate');
    }
    public function insertendgrowing(Request $request)
    {
        $growing = new lots;
        $create_dt = date("Y-m-d H:i:s A", strtotime($growing['post_date'] . " " . $growing['post_time']));
        // dd($create_dt);
        $growing->machineno = $request->get('machinename');
        $growing->enddate = $request->get('edate');
        $growing->endtime = $request->get('etime');
        $growing->growinghour = $request->get('ghour');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('image', $filename);
            $growing->machineimage = $filename;
        }
        if ($request->hasFile('img5')) {
            $file = $request->file('img5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('image5', $filename);
            $growing->img5 = $filename;
        }
        // $growing->created_at =$create_dt;
        $growing->save();
        // dd($growing);
        DB::table('machine')->where('mname', $request->machinename)
            ->update(['stop_timer' => $growing->created_at]);
        return redirect('lots')->with(['message' => 'Insert Growing Sucessfull!']);
    }
    public function recivelot()
    {
        return view('admin.recivelot');
    }
    public function lots()
    {
        $now = Carbon::now();
        $date = Carbon::now()->format('H:i:m');
        return view('admin.lots')->with(['now' => $now, 'date' => $date]);
    }
    public function searchchocolate(Request $request)
    {

        $pro = $request->input('chocolate');
        if ($request->chocolate) {
            $data = DB::table('lot_details')->join('bactches', 'lot_details.batch_id', '=', 'bactches.id')->where('name', "like", "%" . $pro . "%")->get();
        } else if ($request->id) {
            $data = DB::table('lot_details')->join('bactches', 'lot_details.batch_id', '=', 'bactches.id')->select('lot_details.*', 'bactches.name')->where('lot_details.id', "like", "%" . $request->id . "%")->get();
        } else {
            $data = DB::table('lot_details')->join('bactches' . 'id', '=', 'lot_details' . 'batch_id')->get();
        }
        return view('admin.chocolatedashboard')->with(['data' => $data]);
    }
    public function startchocolate()
    {
        return view('admin.startchocolate');
    }
    public function chocolateimage()
    {

        return view('admin.image');
    }
    public function insertimages(Request $request)
    {
        $images = new image;
        $images->name = $request->get('machinename');
        if ($request->hasFile('img1')) {
            $file = $request->file('img1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img1', $filename);
            $images->image = $filename;
        }
        if ($request->hasFile('img2')) {
            $file = $request->file('img2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img2', $filename);
            $images->img2 = $filename;
        }
        if ($request->hasFile('img3')) {
            $file = $request->file('img3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img3', $filename);
            $images->img3 = $filename;
        }
        if ($request->hasFile('img4')) {
            $file = $request->file('img4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img4', $filename);
            $images->img4 = $filename;
        }
        if ($request->hasFile('img5')) {
            $file = $request->file('img5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img5', $filename);
            $images->img5 = $filename;
        }
        $images->save();

        return redirect('chocolateimage')->with(['message' => 'Insert Images Sucessfull!']);
    }
    public function growingassign()
    {
        return view('admin.growingassign');
    }

    // public function assignchocolate(Request $request)
    // {
    //     $request->validate([
    //         'detailall' => 'required|exists:lot_masters,id',
    //         'location_id' => 'required',
    //     ]);

    //     $data = DB::table('lot_masters')
    //         ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
    //         ->where('lot_details.batch_id', $request->detailall)
    //         ->get();
    //     foreach ($data as $assign1) {
    //         $assign = new LotMove;
    //         $assign->location_id = $request->location_id;
    //         $assign->user_id = $request->user_id;
    //         $assign->process = $request->process;
    //         $assign->pcs = $assign1->pcs;
    //         $assign->width = $assign1->width;
    //         $assign->shape = $assign1->shape;
    //         $assign->height = $assign1->height;
    //         $assign->length = $assign1->length;
    //         $assign->weight = $assign1->weight;
    //         $assign->lot_id = $assign1->lot_id;
    //         $assign->batch_id = $assign1->batch_id;
    //         $assign->name = $assign1->name;
    //         $assign->save();
    //     }

    //     return redirect('chocolatedashboard');
    // }

    // public function chocolaterecive(Request $request)
    // {
    // $data = DB::table('lot_masters')
    //     ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
    //     ->where('lot_details.batch_id', $request->lot_id)->get();

    // DB::table('lot_moves')->where('lot_id', $request->lot_id)
    //     ->update(
    //         [
    //             'status' => 2,
    //             'lot_id' => $request->lot_id,
    //             'location_id' => $request->location_id,
    //             'return_type' => $request->return_type,
    //             'print_packet' => $request->print_packet,
    //         ]
    //     );

    // foreach ($data as $assign1) {
    //     $receive = new LotMove;
    //     $receive->location_id = $request->location_id;
    //     $receive->return_type = $request->returntype;
    //     $receive->user_id = $request->user_id;
    //     $receive->print_packet = $request->print;
    //     $receive->status = '1';
    //     // $receive->process = $request->process;
    //     $receive->lot_id = $assign1->lot_id;
    //     $receive->batch_id = $assign1->batch_id;
    //     $receive->name = $assign1->name;
    //     $receive->pcs = $assign1->pcs;
    //     $receive->shape = $assign1->shape;
    //     $receive->height = $assign1->height;
    //     $receive->length = $assign1->length;
    //     $receive->weight = $assign1->weight;
    //     $receive->width = $assign1->width;
    //     $receive->save();
    // }

    //     return redirect('chocolatedashboard');
    // }

    public function getLotDetails(Request $request)
    {
        $lot_deatils =  LotDetail::where("lot_id", $request->lot_id)->orderBy('id')->get();
        return $lot_deatils;
    }

    public function confirmChocolate(Request $request)
    {
        $lot_ids = array();
        $heightArray = array();
        if (isset($request->lot_ids)) {
            $lot_ids = explode(",", $request->lot_ids);
        }
        if (isset($request->heightArray)) {
            $heightArray = explode(",", $request->heightArray);
        }
        if ($lot_ids) {
            foreach ($lot_ids as $key => $lotid) {
                $grow_height = isset($heightArray[$key]) ? $heightArray[$key] : 0;
                DB::table('lot_details')->where('id', $lotid)->update(['grow_height' => $grow_height]);
            }
        }
        DB::table('chocolate_confirmation')->insert(
            [
                'lot_id' => $request->lotid,
                'final_weight' => $request->final_weight_ct,
                'finish_type_id' => $request->finish_type,
                'growing_time' => $request->growing_time,
                'note' => $request->note,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        return response()->json(['success' => true]);
        return true;
    }
}