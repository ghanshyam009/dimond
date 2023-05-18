<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Bactch;
use App\Models\Packet;
use App\Providers\RouteServiceProvider;
use App\Models\stockpacket;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use  Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\returnlaser;
class pakegecontroller extends Controller
{
       public function demo(){
        return view('admin.demo');
       }
       public function index(){
              return view('admin.index');
             }
             public function adminlogin(Request $request)
             {
                $request->validate([
                    'email' => 'required|max:50',
                    'password' => 'required',
                ]);
                
                // Attempt to login
                if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                    $data1 = User::where('email', $request->email)->select('name')->first();
                    $data2 = User::where('email', $request->email)->select('id')->first();
                    $data = $data1->name;
                    $edata = $data2->id;
                    Session::put('studname', $data);
                   Session::put('user_id', $edata);
                    session()->flash('success', 'Successully Logged in !');
                    return redirect('index1');
                } else {
                    session()->flash('error', 'Invalid email and password');
                    return back();
                }
             }

             public function logout()
             {
                 Session()->forget('user_id');
                 Session()->forget('studname');
                 return redirect('/');
             }
               public function laserreturn(Request $request){
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
}