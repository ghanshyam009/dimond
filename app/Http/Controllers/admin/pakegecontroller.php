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

                $data1 = User::where('email', $request->email)->select('name')->first();
                $data = $data1->name;

                // Attempt to login
                if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
                    Session::put('studname', $data);
                    // Redirect to dashboard
                    session()->flash('success', 'Successully Logged in !');
                    return redirect('index1');
                } else {
                    session()->flash('error', 'Invalid email and password');
                    return back();
                }

                //  $email = $req->input('email');
                //  $password = $req->input('password');
                //  $data = DB::table('users')->where('email', $email)->get();
                //  $count = DB::table('users')->where(['email' => $email])->count();
                //  $count1 = DB::table('users')->where(['password' => $password])->count();

                //  if ($email != " " && $password != " ") {
                //     dd("dhfq");
                //      if ($count > 0 && Hash::check($password, $data->password)) {
                //          Session::put('user_id', $data->id);
                //          $a=Session::put('studemail', $data->email);
                //         $a= Session::put('studname', $data->name);
                //          return redirect('index1');
                //      } else {
                //          return redirect()->back()->with('error', "please enter right EMAIL and PASSWORD");
                //      }
                //  } else {
                //      return redirect()->back()->with('error', "enter email and password");
                //  }
             }

             public function logout()
             {
                 Session()->forget('user_id');
                 Session()->forget('studname');
                 return redirect('/');
             }
}
