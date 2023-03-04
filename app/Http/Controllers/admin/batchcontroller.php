<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\lotprocess;
use App\Models\processreson;
use App\Models\finishtype;
use App\Models\color;
use App\Models\purity;
use App\Models\Bactch;
use App\Models\batchsquare;
use App\Models\LotDetail;
use App\Models\LotMaster;
use App\Models\packet;
use App\Models\shap;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class batchcontroller extends Controller
{
    public function searchdate(Request $request)
    {
        $requestData = ['id', 'name'];
        $date = $request->all();

        $search = $request->input('datesearch');
        $batch= $request->input('batch');

        if ($search == "lastmonth") {
            $data = DB::table('bactches')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('bactches')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('bactches')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('bactches')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {
            $data = DB::table('bactches')->whereDate('created_at', Carbon::today())->get();
        } elseif ($search == "yesterday") {
            $data = DB::table('bactches')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('bactches')->whereMonth('created_at', Carbon::now()->month)->get();
        }
        elseif ($request->batch) {
            $data = DB::table('bactches')->where('name', "like", "%" . $batch . "%")->get();
        }
        else {
            $data = DB::table('bactches')->get();
        }
        return view('admin.createlot')->with(['data' => $data, 'batch' => $batch]);
    }
    public function searchLot(Request $request){
        //dd($request->all());
        $let=LotMaster::with('lotDetail')->find($request->search);
        if($let != null){
            return response()->json($let);
        }else{
            return response()->json([]);
        }
    }
    public function recevieLot(Request $request){
        //dd($request->all());
        $recevie=LotMaster::with('lotDetail')->find($request->search);
        if($recevie != null){
            return response()->json($recevie);
        }else{
            return response()->json([]);
        }
    }
    public function assignlot(Request $request){

    }

    public function getbatch($id)
    {
     $pdata = DB::table('bactches')
     ->join('packets', 'packets.batch_id', '=', 'bactches.id')
     ->where('bactches.id', $id)
     ->get();
     $data=DB::table('bactches')->get();
     $count =$pdata->count();
     if($count == 0){
         $count = 1;
     }
        $sumwidth=$pdata->sum('width');
        $widthdivided=$sumwidth/$count;
        $sumheight=$pdata->sum('height');
        $heightdivided=$sumheight/$count;
        $sumlength=$pdata->sum('length');
        $lengthdivided=$sumlength/$count;
        $sumweight=$pdata->sum('weight');
      return view('admin.clickbatch')->with(['pdata' => $pdata,'data'=>$data,'widthdivided'=>$widthdivided,'heightdivided'=>$heightdivided,'lengthdivided'=>$lengthdivided,'sumweight'=>$sumweight]);
    }
    public function searchseed(Request $request)
    {
        $requestData = ['id','batch_id','pcs','shape','height','length','width','weight','timer','stop_timer'];
        $date = $request->all();
        $pdata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id');

        $search = $request->input('datesearch');

        if ($search == "lastmonth") {
            $data = DB::table('packets')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('packets')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('packets')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {
            $data = DB::table('packets')->whereDate('created_at', Carbon::today())->get();
        } elseif ($search == "yesterday") {
            $data = DB::table('packets')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('packets')->whereMonth('created_at', Carbon::now()->month)->get();
        }

        else {
            $data = DB::table('packets')->get();
        }
        return redirect('getbatch/{id}')->with(['data' => $data]);
    }
    public function searchshape(Request $request)
    {
        $requestData = ['id','name','status'];
        $date = $request->all();

        $pro= $request->input('shapn');
        $search = $request->input('datesearch');

        if ($search == "lastmonth") {
            $data = DB::table('shaps')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->paginate(10);
        } elseif ($search == "last7days") {
            $data = DB::table('shaps')->where('created_at', '>=', Carbon::now()->subDays(7))->paginate(10);
        } elseif ($search == "last15days") {
            $data = DB::table('shaps')->where('created_at', '>=', Carbon::now()->subdays(15))->paginate(10);
        } elseif ($search  == "lastyear") {
            $data = DB::table('shaps')->whereYear('created_at', date('Y', strtotime('-1 year')))->paginate(10);
        } elseif ($search == "today") {

            $data = DB::table('shaps')->whereDate('created_at', Carbon::today())->paginate(10);
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('shaps')->whereDate('created_at', '=', Carbon::yesterday())->paginate(10);
        } elseif ($search == "thismonth") {
            $data = DB::table('shaps')->whereMonth('created_at', Carbon::now()->month)->paginate(10);
        }
        elseif ($request->shapn) {
            
            $data = DB::table('shaps')->where('name', "like", "%" . $pro . "%")->paginate(10);
        }

        else {
            $data = DB::table('shaps')->paginate(10);
        }
        return view('admin.shape')->with(['data' => $data,'pro'=>$pro]);
    }
    public function searchcolor(Request $request)
    {
        $requestData = ['id','name','status'];
        $date = $request->all();

        $pro= $request->input('colorn');
        $search = $request->input('datesearch');

        if ($search == "lastmonth") {
            $data = DB::table('colors')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->paginate(10);
        } elseif ($search == "last7days") {
            $data = DB::table('colors')->where('created_at', '>=', Carbon::now()->subDays(7))->paginate(10);
        } elseif ($search == "last15days") {
            $data = DB::table('colors')->where('created_at', '>=', Carbon::now()->subdays(15))->paginate(10);
        } elseif ($search  == "lastyear") {
            $data = DB::table('colors')->whereYear('created_at', date('Y', strtotime('-1 year')))->paginate(10);
        } elseif ($search == "today") {

            $data = DB::table('colors')->whereDate('created_at', Carbon::today())->paginate(10);
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('colors')->whereDate('created_at', '=', Carbon::yesterday())->paginate(10);
        } elseif ($search == "thismonth") {
            $data = DB::table('colors')->whereMonth('created_at', Carbon::now()->month)->paginate(10);
        }
        elseif ($request->colorn) {
            $data = DB::table('colors')->where('name', "like", "%" . $pro . "%")->paginate(10);
        }

        else {
            $data = DB::table('colors')->paginate(10);
        }
        return view('admin.color')->with(['data' => $data,'pro'=>$pro]);
    }
    public function createlot(Request $request,$id = null)
    {
        $requestData = ['id','name'];
        $data = DB::table('bactches')->get();
   
        return view('admin.createlot')->with(['data'=>$data,'id'=>$id]);
    }
    public function savelot(Request $request){
        $lot=new LotMaster();
        $lot->name=implode(",",array_filter(array_unique($request->name)));
        $lot->save();

        $lotDetail=[];
        foreach($request->uid as $key=>$val){
            if($request->uid[$key] != null){
                
                $packet=packet::find($request->uid[$key]);

                $lotdetail = new LotDetail();
                $lotdetail->batch_id=$request->batch_id;
                $lotdetail->pcs=$packet->pcs;
                $lotdetail->shape=$packet->shape;
                $lotdetail->height=$packet->height;
                $lotdetail->length=$packet->length;
                $lotdetail->width=$packet->width;
                $lotdetail->weight=$packet->weight;
                $lotdetail->timer=$packet->timer;
                $lotdetail->stop_timer=$packet->stop_timer;
                $lotDetail[]=$lotdetail;
            }
            packet::where('id',$request->uid[$key])->delete();
        }
        
        $lot->lotDetail()->saveMany($lotDetail);
        
        return redirect()->route('createlot', ['id' => $lot]);
    }
    public function createlotPrint($id){
        $data=LotMaster::with('lotDetail')->find($id);
        $count=count($data->lotDetail);
        $res=[];
        $totalheight=$totallength=$totalwidth=$totalweight=0;
        foreach($data->lotDetail as $d){
            $totalheight=$totalheight+$d->height;
            $totallength=$totallength+$d->length;
            $totalwidth=$totalwidth+$d->width;
            $totalweight=$totalweight+$d->weight;
        }
        $res['id']=$data->id;
        $res['name']=$data->name." "."Lot-".$data->id;
        $res['pcs']=$count;
        $res['weight'] = $totalweight;
        $res['avg_height']=round($totalheight/$count, 2);
        $res['avg_length']=round($totallength/$count, 2);
        $res['avg_width']=round($totalwidth/$count, 2);
        $res['avg_weight']=round($totalweight/$count, 2);
        return view('admin.createLotPrint')->with(['data'=>$res]); 
    }
    public function getlot(Request $request){
        $batch_code=$request->batch_code;
        $batch_id=$request->batch_id;
        if($batch_id == "mix"){
            $data=DB::table('packets')
            ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
            ->where('packets.id', '=', $batch_code)
            ->select('packets.*', 'bactches.name')
            ->get();
        }else{
            $data=DB::table('packets')
            ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
            ->where('packets.id', '=', $batch_code)
            ->where('packets.batch_id', '=', $batch_id)
            ->select('packets.*', 'bactches.name')
            ->get();

        }
        if(count($data) > 0){
            return response()->json($data);
        }else{
            //not match
            return response()->json([]);
        }
    }
    public function search(Request $request)
    {
        $requestData = ['id', 'name'];
        $batchname= $request->input('batchname');
        if ($request->batchname) {
            $data = DB::table('bactches')->where('name', "like", "%" . $batchname . "%")->get();
        }
        else {
            $data = DB::table('bactches')->get();
        }
        return view('admin.createlot')->with(['data' => $data, 'batchname' => $batchname]);
    }
    public function batchlist(Request $request){
        $requestData = ['id', 'name'];
        $pro = $request->input('seed');
            $samedata = DB::table('bactches')
            ->join('packets', 'packets.batch_id', '=', 'bactches.id')
            ->where('name', "like", "%" . $request->search. "%")->get();
        return view('admin.batchlist')->with(['samedata'=>$samedata,'pro'=>$pro]);
       }
    public function batch1(){
        $data = DB::table('bactches')->get();
        return view('admin.batch1')->with(['data'=>$data]);
       }
       public function insertbatch(Request $request)
       {
           $batch = new Bactch;
           $batch->name = $request->get('name');
           $batch->save();

           return redirect()->back()->with('message', 'Batch added successfully');
       }
    public function shape(Request $request){
        $requestData = ['id', 'name','status'];
        $pro = $request->input('shapename');
        $data = DB::table('shaps')
    ->where('name', "like", "%" . $request->shapename. "%")->get();
        return view('admin.shape')->with(['pro'=>$pro,'data'=>$data]);
       }
       public function insertshape(Request $request)
       {
           $shape = new shap;
           $shape->name = $request->get('name');
           $shape->save();

        return redirect('shape')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }

       public function shaperemove(Request $request, $id)
       {
           $data = DB::table('shaps')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function lotprocess(){
        $data = DB::table('bactches')->get();
        return view('admin.lotprocess')->with(['data'=>$data]);
       }
       public function insertlotprocess(Request $request)
       {
           $stockpackets = new lotprocess;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();

           
        return redirect('lotprocess')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function lotprocessremove(Request $request, $id)
       {
           $data = DB::table('lotprocesses')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function processreson(){
        $data = DB::table('bactches')->get();
        return view('admin.processreson')->with(['data'=>$data]);
       }
       public function insertprocessreson(Request $request)
       {
           $stockpackets = new processreson;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('processreson')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function processresonremove(Request $request, $id)
       {
           $data = DB::table('processresons')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function finishtype(){
        $data = DB::table('bactches')->get();
        return view('admin.finishtype')->with(['data'=>$data]);
       }
       public function insertfinishtype(Request $request)
       {
           $stockpackets = new finishtype;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('finishtype')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function finishtyperemove(Request $request, $id)
       {
           $data = DB::table('finishtypes')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
       public function color(Request $request){
        $requestData = ['id', 'name','status'];

        $data = DB::table('colors')->get();
        return view('admin.color')->with(['data'=>$data]);
       }
       public function insertcolor(Request $request)
       {
           $stockpackets = new color;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('color')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function colorremove(Request $request, $id)
       {
           $data = DB::table('colors')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

       public function purity(){
        $data = DB::table('bactches')->get();
        return view('admin.purity')->with(['data'=>$data]);
       }
       public function insertpurity(Request $request)
       {
           $stockpackets = new purity;
           $stockpackets->name = $request->get('name');
           $stockpackets->save();
        return redirect('purity')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }
       public function purityremove(Request $request, $id)
       {
           $data = DB::table('purities')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }

    }
