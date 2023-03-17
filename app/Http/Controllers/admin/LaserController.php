<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LotMove;
use App\Models\returnlaser;
use Illuminate\Support\Facades\Session;
class LaserController extends Controller
{
        public function laser1(){
      return view('admin.laser1');
     }
          public function lotsdashboard(){
      return view('admin.lotsdashboard');
    }
    public function packetlaserdashboard(){
      return view('admin.packetlaserdashboard');
    }
     public function machinelaser(){
      return view('admin.machinelaser');
    }

    public function receivelaser(Request $request)
    {
        $request->validate([
            'recivealllaser'=>'required|exists:lot_masters,id',
            'location_id'=>'required'
        ]);

        $data = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->recivealllaser)->get();

        foreach($data as $assign1){
            $receive = new LotMove;
            $receive->location_id = $request->location_id;
            $receive->return_type = $request->returntype;
            $receive->user_id = $request->user_id;
            $receive->print_packet = $request->print;
            $receive->status = '1';
            $receive->process = $request->process;
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

        return redirect('laser1');

    }
        public function assignlaser(Request $request){
        $request->validate([
            'detailallassign' => 'required|exists:lot_masters,id',
            'location_id' => 'required',
        ]);

        $data = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->detailallassign)->get();
            foreach($data as $assign1){
                $assign = new LotMove;
                 $assign->machine= $request->machine;
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
          return redirect('laser1');
   }
       public function laserreturn(Request $request){
// dd($request);
        $request->validate([
            'returnalllaser' => 'required|exists:lot_masters,id',
        ]);
      
          $returndata = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->returnalllaser)->get();
            // dd($returndata);
            foreach($returndata as $rlaser){
                $laser = new returnlaser;
                $laser->user_id = $request->user_id;
                $laser->process = $request->process;
                $laser->netprocess = $request->netprocess;
                $laser->dlcweight = $request->dlcweight;
                $laser->name = $rlaser->name;
                $laser->pcs = $rlaser->pcs;
                $laser->shape = $rlaser->shape;
                $laser->height = $rlaser->height;
                $laser->length = $rlaser->length;
                $laser->width = $rlaser->width;
                $laser->weight = $rlaser->weight;
                $laser->lot_id = $rlaser->lot_id;
                $laser->batch_id = $rlaser->batch_id;
                $laser->save();
            }
            // dd($laser);
          return redirect('laser1');
}
 public function laserreturntostock(Request $request){
// dd($request);
 $a=Session::get('user_id');
//  dd($a);
        $request->validate([
            'returnstock' => 'required|exists:lot_masters,id',
        ]);
      
          $returndata = DB::table('lot_masters')
        ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
        ->where('lot_details.batch_id' ,$request->returnstock)->get();
            // dd($returndata);
            foreach($returndata as $rlaser){
                $laser = new returnlaser;
                $laser->user_id = $a;
                $laser->name = $rlaser->name;
                $laser->pcs = $rlaser->pcs;
                $laser->shape = $rlaser->shape;
                $laser->height = $rlaser->height;
                $laser->length = $rlaser->length;
                $laser->width = $rlaser->width;
                $laser->weight = $rlaser->weight;
                $laser->lot_id = $rlaser->lot_id;
                $laser->batch_id = $rlaser->batch_id;
                $laser->save();
            }
            // dd($laser);
          return redirect('laser1');
}
}