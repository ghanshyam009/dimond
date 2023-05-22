<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lots;
use App\Models\stockloss;
use App\Models\chocolate;
use App\Models\stockpacket;
use App\Models\location;
use App\Models\stockmove;
use App\Models\stockquant;
use App\Models\weightloss;
use App\Models\cancelpacket;
use App\Models\LotMaster;
use App\Models\LotDetail;
use App\Models\LotMove;

class stockcontroller extends Controller
{
    public function stock1()
    {
        $data = LotMaster::with('lotDetail')->get();
        if (!empty($data)) {
            $res = [];
            foreach ($data as $v) {
                $inr['id'] = $v->id;
                $inr['name'] = $v->name;
                $totalweight = $totalheight = $totallength = $totalwidth = 0;
                $count = count($v->lotDetail);
                foreach ($v->lotDetail as $iv) {
                    $totalheight = $totalheight + $iv->height;
                    $totallength = $totallength + $iv->length;
                    $totalwidth = $totalwidth + $iv->width;
                    $totalweight = $totalweight + $iv->weight;
                }
                $inr['pcs'] = $count;
                $inr['avg_height'] = round($totalheight / $count, 2);
                $inr['avg_length'] = round($totallength / $count, 2);
                $inr['avg_width'] = round($totalwidth / $count, 2);
                $inr['avg_weight'] = round($totalweight / $count, 2);
                $inr['total_weight'] = round($totalweight, 2);
                $res[] = $inr;
            }
        }
        return view('admin.stock1')->with(['data' => $res]);
    }
    public function insertstock(Request $request)
    {

        $lot = new lots;
        $lot->batch = $request->get('batch');
        $lot->pcs = $request->get('pcs');
        $lot->shape = $request->get('shape');
        $lot->height = $request->get('height');
        $lot->length = $request->get('length');
        $lot->width = $request->get('width');
        $lot->weight = $request->get('weight');
        $lot->save();

        return redirect('stock1')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function weightloss()
    {
        $data = DB::table('bactches')->get();
        return view('admin.weightloss')->with(['data' => $data]);
    }
    public function insertweightloss(Request $request)
    {

        $weight = new weightloss;
        $weight->batch = $request->get('batch');
        $weight->pcs = $request->get('pcs');
        $weight->shape = $request->get('shape');
        $weight->height = $request->get('height');
        $weight->length = $request->get('length');
        $weight->width = $request->get('width');
        $weight->weight = $request->get('weight');
        $weight->save();

        return redirect('weightloss')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function cancelpackets()
    {
        $data = DB::table('bactches')->get();
        return view('admin.cancelpackets')->with(['data' => $data]);
    }
    public function insertcancelpackets(Request $request)
    {
        $cancelpackets = new cancelpacket;
        $cancelpackets->batch = $request->get('batch');
        $cancelpackets->pcs = $request->get('pcs');
        $cancelpackets->shape = $request->get('shape');
        $cancelpackets->height = $request->get('height');
        $cancelpackets->length = $request->get('length');
        $cancelpackets->width = $request->get('width');
        $cancelpackets->weight = $request->get('weight');
        $cancelpackets->save();
        return redirect('cancelpackets')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }

    public function stockloss()
    {
        $data = DB::table('bactches')->get();
        return view('admin.stockloss')->with(['data' => $data]);
    }
    public function insertstockloss(Request $request)
    {

        $stockpackets = new stockloss;
        $stockpackets->batch = $request->get('batch');
        $stockpackets->pcs = $request->get('pcs');
        $stockpackets->shape = $request->get('shape');
        $stockpackets->height = $request->get('height');
        $stockpackets->length = $request->get('length');
        $stockpackets->width = $request->get('width');
        $stockpackets->weight = $request->get('weight');
        $stockpackets->save();

        return redirect('stockloss')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function chocolate()
    {
        $data = DB::table('bactches')->get();
        return view('admin.chocolate')->with(['data' => $data]);
    }
    public function insertchocolate(Request $request)
    {

        $chocolate = new chocolate;
        $chocolate->batch = $request->get('batch');
        $chocolate->pcs = $request->get('pcs');
        $chocolate->shape = $request->get('shape');
        $chocolate->height = $request->get('height');
        $chocolate->length = $request->get('length');
        $chocolate->width = $request->get('width');
        $chocolate->weight = $request->get('weight');
        $chocolate->save();

        return redirect('chocolate')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function location()
    {
        $data = DB::table('locations')->get();
        return view('admin.location')->with(['data' => $data]);
    }
    public function insertlocation(Request $request)
    {
        $location = new location;
        $location->name = $request->get('name');
        $location->save();

        return redirect('location')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }

    public function stockmove()
    {
        $data = DB::table('bactches')->get();

        $moves = DB::table('lot_moves')
            ->select('lot_moves.lot_id')->distinct()
            ->join('locations', 'lot_moves.location_id', '=', 'locations.id')
            ->join('users', 'lot_moves.user_id', '=', 'users.id')
            ->select('lot_moves.created_at as date', 'lot_moves.pcs', 'lot_moves.name as moves_name', 'locations.*', 'users.*', 'locations.name as locations_name')
            // ->select(DB::raw('lot_moves.*,lot_moves.created_at as time,lot_moves.name as moves_name,locations.*,
            // locations.name as locations_name, users.*,users.name as users_name'))
            ->get();

        return view('admin.stockmove')->with(['data' => $data, 'moves' => $moves]);
    }

    public function insertstockmove(Request $request)
    {

        $stockmove = new stockmove;
        $stockmove->batch = $request->get('batch');
        $stockmove->pcs = $request->get('pcs');
        $stockmove->shape = $request->get('shape');
        $stockmove->height = $request->get('height');
        $stockmove->length = $request->get('length');
        $stockmove->width = $request->get('width');
        $stockmove->weight = $request->get('weight');
        $stockmove->save();

        return redirect('stockmove')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function stockquant()
    {
        $data = DB::table('bactches')->get();
        return view('admin.stockquant')->with(['data' => $data]);
    }
    public function insertstockquant(Request $request)
    {

        $stockquant = new stockquant;
        $stockquant->batch = $request->get('batch');
        $stockquant->pcs = $request->get('pcs');
        $stockquant->shape = $request->get('shape');
        $stockquant->height = $request->get('height');
        $stockquant->length = $request->get('length');
        $stockquant->width = $request->get('width');
        $stockquant->weight = $request->get('weight');
        $stockquant->save();

        return redirect('stockquant')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function createlocation()
    {
        return view('admin.createlocation');
    }
    public function packets(Request $request)
    {
        $data = DB::table('bactches')->get();
        $requestData = ['id', 'name'];
        $packet = $request->input('search');
        $datas = DB::table('stockpackets')->where('batch', "like", "%" . $request->search . "%")->get();
        return view('admin.packets')->with(['data' => $data, 'packet' => $packet]);
    }

    public function insertstockpackets(Request $request)
    {
        $stockpackets = new stockpacket;
        $stockpackets->batch = $request->get('batch');
        $stockpackets->pcs = $request->get('pcs');
        $stockpackets->shape = $request->get('shape');
        $stockpackets->height = $request->get('height');
        $stockpackets->length = $request->get('length');
        $stockpackets->width = $request->get('width');
        $stockpackets->weight = $request->get('weight');
        $stockpackets->save();

        return redirect('packets')->with('message', json_encode(['success' => 'Seeds sucessfull!']));
    }
    public function getstock($id)
    {
        $data = DB::table('lot_masters')
            ->join('lot_details', 'lot_details.lot_id', '=', 'lot_masters.id')
            ->where('lot_masters.id', $id)
            ->get();
        $samedata = DB::table('lot_masters')
            ->join('lot_details', 'lot_details.lot_id', '=', 'lot_masters.id')
            ->where('lot_masters.id', $id)
            ->select('lot_details.pcs')
            ->distinct()
            ->get();
        $count = $data->count();
        $sumwidth = $data->sum('width');
        $widthdivided = $sumwidth / $count;
        $sumheight = $data->sum('height');
        $heightdivided = $sumheight / $count;
        $sumlength = $data->sum('length');
        $lengthdivided = $sumlength / $count;
        $sumweight = $data->sum('weight');
        $avgweight = $sumweight / $count;

        return view('admin.clickstock')->with(['data' => $data, 'widthdivided' => $widthdivided, 'heightdivided' => $heightdivided, 'lengthdivided' => $lengthdivided, 'sumweight' => $sumweight, 'avgweight' => $avgweight, 'samedata' => $samedata]);
    }
}