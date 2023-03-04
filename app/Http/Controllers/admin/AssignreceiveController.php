<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LotMove;

class AssignreceiveController extends Controller
{
       public function assign(){
    return view('admin.assign');
   }
   public function assignreceive(){
    return view('admin.assignreceive');
   }
     public function receive(){
      return view('admin.receive');
     }
       public function receivechocolate(Request $request)
    {
        $request->validate([
            'reciveallchocolate'=>'required|exists:lot_masters,id',
            'location_id'=>'required'
        ]);

        $data = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->reciveallchocolate)->get();

        foreach($data as $assign1){
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

        return redirect('receive');

    }
       public function assigngrowing(Request $request){
// dd($request);
        $request->validate([
            'assigngrowingall' => 'required|exists:lot_masters,id',
            'location_id' => 'required',

        ]);

        $data = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->assigngrowingall)->get();

            foreach($data as $assign1){
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

            return redirect('assign');
   }

}