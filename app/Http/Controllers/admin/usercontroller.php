<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\lots;
class usercontroller extends Controller
{
    public function login(){ 
        return view('admin.login');
       }

     public function userlogin(Request $req)
     {
         $email = $req->input('useremail');
         $password = $req->input('userpassword');
         $data = DB::table('createsettingusers')->where('login', $email)->first();
         $count = DB::table('createsettingusers')->where(['login' => $email])->count();
         $count1 = DB::table('createsettingusers')->where(['password' => $password])->count();
         if ($email != " " && $password != " ") {
            if($count>0 && $count1>0){
                Session::put('login_id', $data->id);
                 Session::put('loginemail', $data->login);
                 return redirect('createuserchocolate');
             }
              else {
                 return redirect()->back()->with('error', "please enter right EMAIL and PASSWORD");
                  }
         } else {
             return redirect()->back()->with('error', "enter email and password");
         }
     }
     public function userlogout()
     {
         Session()->forget('login_id');
         Session()->forget('loginemail');
 
         return redirect('loginuser');
     }
     public function createuserchocolate(){ 
        return view('admin.createuserchocolate');
       }
       public function insertendgrowinguser(Request $request)
       {
           $growing = new lots;
           $growing->machineno = $request->get('machinename');
           $growing->enddate = $request->get('edate');
           $growing->endtime = $request->get('etime');
           $growing->growinghour = $request->get('ghour');
           if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('image', $filename);
            $growing->machineimage = $filename;
        }
           $growing->save();
      
        return redirect('createuserchocolate')->with(['message'=>'Insert Growing Sucessfull!']);
       }
}
