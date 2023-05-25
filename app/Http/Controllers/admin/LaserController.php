<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LotMove;
use App\Models\returnlaser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class LaserController extends Controller
{
  public function laser1()
  {
    $data = DB::table('chocolates')
      ->select((DB::raw('lotno,machineno,lot_id,batch_id,bactches.name as batch_name,lot_masters.name as lot_name,sum(height) as heights,sum(weight) as weights,sum(length) as lengths,sum(width) as widths,count(pcs) as pc')))
      ->leftJoin('lot_moves', 'lot_moves.lot_id', '=', 'chocolates.lotno')
      ->leftJoin('lot_masters', 'lot_masters.id', '=', 'lot_moves.lot_id')
      ->leftJoin('bactches', 'bactches.id', '=', 'lot_moves.batch_id')
      ->where('lot_moves.status', 1)
      ->where('lot_moves.location_id', 2)
      ->groupBy('machineno', 'lotno', 'lot_id', 'batch_id', 'bactches.name', 'lot_masters.name')
      ->get();
    return view('admin.laser1')->with(['data' => $data]);
  }
  public function lotsdashboard()
  {
    return view('admin.lotsdashboard');
  }
  public function packetlaserdashboard()
  {
    return view('admin.packetlaserdashboard');
  }
  public function machinelaser()
  {
    return view('admin.machinelaser');
  }

  public function receivelaser(Request $request)
  {
    $request->validate([
      'recivealllaser' => 'required|exists:lot_masters,id',
      'location_id' => 'required'
    ]);

    $data = DB::table('lot_masters')
      ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
      ->where('lot_details.batch_id', $request->recivealllaser)->get();

    foreach ($data as $assign1) {
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
  public function assignlaser(Request $request)
  {
    $request->validate([
      'detailallassign' => 'required|exists:lot_masters,id',
      'location_id' => 'required',
    ]);

    $data = DB::table('lot_masters')
      ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
      ->where('lot_details.batch_id', $request->detailallassign)->get();
    foreach ($data as $assign1) {
      $assign = new LotMove;
      $assign->machine = $request->machine;
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
  public function laserreturn(Request $request)
  {
    // dd($request);
    $request->validate([
      'returnalllaser' => 'required|exists:lot_masters,id',
    ]);

    $returndata = DB::table('lot_masters')
      ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
      ->where('lot_details.batch_id', $request->returnalllaser)->get();
    // dd($returndata);
    foreach ($returndata as $rlaser) {
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
  public function laserreturntostock(Request $request)
  {
    // dd($request);
    $a = Session::get('user_id');
    //  dd($a);
    $request->validate([
      'returnstock' => 'required|exists:lot_masters,id',
    ]);

    $returndata = DB::table('lot_masters')
      ->join('lot_details', 'lot_details.batch_id', '=', 'lot_masters.id')
      ->where('lot_details.batch_id', $request->returnstock)->get();
    // dd($returndata);
    foreach ($returndata as $rlaser) {
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

  public function startlaser($id,Request $request)
  {
      $data = DB::table('chocolates')
                ->select((DB::raw('lotno,startdate,starttime,machineno,img1,img2,lot_id,batch_id,bactches.name as batch_name,lot_masters.name as lot_name,sum(height) as heights,sum(weight) as weights,sum(length) as lengths,sum(width) as widths,count(pcs) as pc')))
                ->leftJoin('lot_moves','lot_moves.lot_id','=','chocolates.lotno')
                ->leftJoin('lot_masters','lot_masters.id','=','lot_moves.lot_id')
                ->leftJoin('bactches','bactches.id','=','lot_moves.batch_id')
                ->where('lot_moves.status', 1)
                ->where('lot_moves.location_id', 2)
                ->where('lot_moves.lot_id', $id)
                ->groupBy('machineno','startdate','starttime','lotno','lot_id','batch_id','bactches.name','lot_masters.name','img1','img2')
                ->first();

            if(isset($request->machine_id) && !empty($request->machine_id)){
                DB::table('lasers')->insert([
                  'lot_id' => $data->lot_id,
                  'batch_id' => $data->batch_id ,
                  'machine_id' => $request->machine_id,
                  'user_id' => 1,
                  'pcs' => $data->pc,
                  'shape' => "shape",
                  'height' => $data->heights,
                  'length' => $data->lengths,
                  'width' => $data->widths,
                  'weight' => $data->weights,
                  'dlc_weight' => "0",
                  'dm_weight' => "0",
                  'final_weight' => "0",
                  'start_image' => $data->img1,
                  'end_image' => $data->img2,
                  'timer' => Carbon::now(),  
                  'created_at' => Carbon::now(),  
                  'updated_at' => Carbon::now(),  
              ]);
            }
        return view('admin.clicklaser')->with(['data' => $data]);

  }

  public function saveCutLasser(Request $request){

    $insertArray = [];
    $height = $request->height;
    if($height)
    {
        foreach($height as $key => $val)
        {
          $insertArray [] = [
              'laser_id' => '1',
              'lot_id' => $request->lot_ids,
              'lot_type' => $request->lot_type,
              'process_type' => $request->next_process,
              'height' => isset($request->height[$key]) ?  $request->height[$key] : 0,
              'length' => isset($request->length[$key]) ?  $request->length[$key] : 0,
              'weight' => isset($request->weight[$key]) ?  $request->weight[$key] : 0,
              'width' => isset($request->width[$key]) ?  $request->width[$key] : 0,
              'process' => isset($request->process[$key]) ?  $request->process[$key] : 0,
              'dlc_weights' => $request->dlsweight,
              'loss_weights' => $request->lweight,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
          ];
        }
        if($insertArray){
          DB::table('laser_cut_details')->insert($insertArray);
        }
        return redirect('laser1');
    }else{
      return redirect('laser1');
    }
  }

  public function searchLotmoves(Request $request){

    $data = DB::table('lot_moves')->select('name','height','width','length','weight')->where('lot_id',$request->search)->where('location_id',2)->where('status',2)->get();
    if($data != null){
        return response()->json($data);
    }else{
        return response()->json([]);
    }
}

}
