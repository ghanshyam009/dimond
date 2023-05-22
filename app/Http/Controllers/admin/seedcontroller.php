<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\packet;
use App\Models\Bactch;
use Illuminate\Bus\Batch;
use Illuminate\Support\Carbon;
class seedcontroller extends Controller
{
    public function seedPrint(Request $request,$id){
        $data=DB::table('packets')
            ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
            ->select('packets.*', 'bactches.name')
            ->where('packets.id',$id)
            ->first();

            return view('admin.seedsPrint')->with(['data'=>$data, 'id'=>$id]);
    }
    public function multiPrint(Request $request){
        $datas=DB::table('packets')
            ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
            ->select('packets.*', 'bactches.*')
            ->get();
        return view('admin.multiPrints')->with(['datas'=>$datas,'random'=>rand(1111111111,9999999999)]);
}
    public function seeds1(){
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');
        $count = DB::table('packets')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        round($divided,2);
        $sumlenth=DB::table('packets')->sum('length');
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width');
        $widthdivided=$sumwidth/$count;
        $samedata = DB::table('bactches')
        ->join('packets', 'packets.batch_id', '=', 'bactches.id')->get();
        return view('admin.seeds1')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided,'samedata'=>$samedata]);
       }

    public function insertseeds(Request $request)
    {
        $batch= $request->input('batch_id');
        $pcs = $request->input('pcs');
        $shape = $request->input('shape');
        $height = $request->input('height');
        $length = $request->input('length');
        $width = $request->input('width');
        $weight = $request->input('weight');

        $n = count($height);
        $students = [];

        for ($i=0; $i < $n; $i++) {
            $data = [
                'batch_id' => $batch,
                'pcs' => $pcs,
                'shape' => $shape,
                'height' => $height[$i],
                'length' => $length[$i],
                'width' => $width[$i],
                'weight' => $weight[$i],
            ];

            $students[] = $data;
        }
        
        foreach ($students as $row) {
            Packet::create($row);

        }
        $user = Bactch::where('id', '=', $request->input('batch_id'))->first();
        $packets = packet::orderBy('id', 'desc')->take($i)->get();

        return view('admin.directPrint',  compact('user','packets'));
   }
       public function seedslist(){
        return view('admin.seedslist');
       }
              public function searchseeds(Request $request){

        $pro= $request->input('seedn');
        $height= $request->input('heightsearch');
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');

        $count = DB::table('packets')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        round($divided,2);
        $sumlenth=DB::table('packets')->sum('length');
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width');
        $widthdivided=$sumlenth/$count;
        // dd($pro);
       $samedata= DB::table('packets')
        ->join('bactches', 'packets.batch_id', '=', 'bactches.id')
        ->select('packets.*', 'bactches.name')
        ->distinct('name')->count('name');
        if ($request->seedn) {
            $samedata = DB::table('packets')->join('bactches', 'packets.batch_id', '=', 'bactches.id')->select('packets.*', 'bactches.name')->where('name', "like", "%" . $pro . "%")->get();
        }
        elseif ($request->heightsearch) {
             $samedata= DB::table('packets')->join('bactches', 'packets.batch_id', '=', 'bactches.id')->select('packets.*', 'bactches.name')->where('height', "like", "%" . $height . "%")->get();
        }
        else  {
                    $samedata = DB::table('packets')->join('bactches'.'id','=','packets'.'batch_id')->select('packets.*', 'bactches.name')->get();
                   }
        return view('admin.seeds1')->with(['samedata' => $samedata,'sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
}
