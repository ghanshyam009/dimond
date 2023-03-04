<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class stockdashbordcontroller extends Controller
{
    
    public function stockdashboard1(){
        $a = DB::table("packets")->sum('pcs');
        $a1 = DB::table("packets")->sum('weight');
      
      
        $d = DB::table("stocklosses")->sum('pcs');
        $d1 = DB::table("stocklosses")->sum('weight');
        return view('admin.stockdashboard1')->with(['a'=>$a,'a1'=>$a1,'d'=>$d,'d1'=>$d1]);
       }
       public function clickstockdashboardseeds(){
        $sum=DB::table('packets')->sum('weight');
        $sumdivided=DB::table('packets')->sum('height');
        $count = DB::table('packets')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('packets')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('packets')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.clickstockdashboardseeds')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
       public function clickstockdashboardchocklate(){
        $sum=DB::table('chocolates')->sum('weight');
        $sumdivided=DB::table('chocolates')->sum('height');
        $count = DB::table('chocolates')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('chocolates')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('chocolates')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.clickstockdashboardchocklate')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
       public function clickstockdashboardstockloss(){
        $sum=DB::table('stocklosses')->sum('weight');
        $sumdivided=DB::table('stocklosses')->sum('height');
        $count = DB::table('stocklosses')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('stocklosses')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('stocklosses')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.clickstockdashboardstockloss')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
       public function clickstockdashboardstock(){
        $sum=DB::table('lots')->sum('weight');
        $sumdivided=DB::table('lots')->sum('height');
        $count = DB::table('lots')->count();
        if($count == 0){
            $count = 1;
        }
        $divided=$sumdivided/$count;
        $sumlenth=DB::table('lots')->sum('length'); 
        $lenthdivided=$sumlenth/$count;
        $sumwidth=DB::table('lots')->sum('width'); 
        $widthdivided=$sumlenth/$count;
        return view('admin.clickstockdashboardstock')->with(['sum'=>$sum,'divided'=>$divided,'lenthdivided'=>$lenthdivided,'widthdivided'=>$widthdivided]);
       }
}
