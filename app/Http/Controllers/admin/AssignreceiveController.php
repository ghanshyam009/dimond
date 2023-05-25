<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LotMove;

class AssignreceiveController extends Controller
{
    public function assign()
    {
        return view('admin.assign');
    }
    public function assignreceive()
    {
        return view('admin.assignreceive');
    }
    public function receive()
    {
        return view('admin.receive');
    }
    public function receivechocolate(Request $request)
    {
        $request->validate([
            'reciveallchocolate' => 'required|exists:lot_masters,id',
            'location_id' => 'required'
        ]);
        if($request->location_id == 1){
            $checkAssignLot1 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot1){
                return "chocolate";
            }
        }
        if($request->location_id == 2){
            $checkAssignLot2 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot2){
                return "laser";
            }
        }
        if($request->location_id == 3){
            $checkAssignLot3 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot3){
                return "stock";
            }
        }
        if($request->location_id == 4){
            $checkAssignLot4 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot4){
                return "boiling";
            }
        }
        if($request->location_id == 5){
            $checkAssignLot5 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot5){
                return "polish";
            }
        }
        if($request->location_id == 6){
            $checkAssignLot5 = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',1)->first();
            if(!$checkAssignLot5){
                return "stockfinal";
            }
        }
        $checkLot = DB::table('lot_moves')->where('lot_id', $request->reciveallchocolate)->where('location_id', $request->location_id)->where('status',2)->first();
        if ($checkLot) {
            if ($request->location_id == 1) {
                return 0;
            } else if ($request->location_id == 2) {
                return 1;
            } else if ($request->location_id == 3) {
                return 2;
            } else if ($request->location_id == 4) {
                return 3;
            } else if ($request->location_id == 5) {
                return 4;
            } else if ($request->location_id == 6) {
                return 5;
            }
        } else {
            $data = DB::table('lot_masters')
                ->join('lot_details', 'lot_details.lot_id', '=', 'lot_masters.id')
                ->where('lot_details.lot_id', $request->reciveallchocolate)->get();
            if($data){
                foreach ($data as $assign1) {
                    $receive = new LotMove;
                    $receive->location_id = $request->location_id;
                    $receive->return_type = $request->returntype;
                    $receive->user_id = $request->user_id;
                    $receive->print_packet = $request->print;
                    $receive->status = '1';
                    $receive->lot_id = $assign1->lot_id;
                    $receive->batch_id = $assign1->batch_id;
                    $receive->name = $assign1->name;
                    $receive->pcs = $assign1->pcs;
                    $receive->shape = $assign1->shape;
                    $receive->height = $assign1->height;
                    $receive->length = $assign1->length;
                    $receive->weight = $assign1->weight;
                    $receive->width = $assign1->width;
                    $receive->save();
                }
                return "success";
            }
        }
        return redirect('receive');
    }

    public function assigngrowing(Request $request)
    {
        $request->validate([
            'assigngrowingall' => 'required|exists:lot_masters,id',
            'location_id' => 'required',
        ]);
        $checkLot = DB::table('lot_moves')->where('lot_id', $request->assigngrowingall)->where('location_id', $request->location_id)->first();
        if ($checkLot) {
            if ($request->location_id == 1) {
                return 0;
            } else if ($request->location_id == 2) {
                return 1;
            } else if ($request->location_id == 3) {
                return 2;
            } else if ($request->location_id == 4) {
                return 3;
            } else if ($request->location_id == 5) {
                return 4;
            } else if ($request->location_id == 6) {
                return 5;
            }
        } else {
            $data = DB::table('lot_masters')->join('lot_details', 'lot_details.lot_id', '=', 'lot_masters.id')->where('lot_details.lot_id', $request->assigngrowingall)->get();
            if ($data) {
                foreach ($data as $assign1) {
                    $assign = new LotMove;
                    $assign->location_id = $request->location_id;
                    $assign->user_id = $request->user_id;
                    $assign->process = $request->process;
                    $assign->pcs = $assign1->pcs;
                    $assign->width = $assign1->width;
                    $assign->shape = $assign1->shape;
                    $assign->height = $assign1->height;
                    $assign->length = $assign1->length;
                    $assign->weight = $assign1->weight;
                    $assign->lot_id = $assign1->lot_id;
                    $assign->batch_id = $assign1->batch_id;
                    $assign->name = $assign1->name;
                    $assign->save();
                }
                return "success";
            }
        }
        return redirect('assign');
    }
}
