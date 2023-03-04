<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\createsettinguser;
use App\Models\language;
use App\Models\district;
use App\Models\company;
use App\Models\createlanguage;
use App\Models\image;
class settingcontroller extends Controller
{
    public function createsettinguser(){
        return view('admin.createsettinguser');
       }
       public function insertcreatesettinguser(Request $request)
       {
 
           $settinguser = new createsettinguser;
           $settinguser->name = $request->get('name');
           $settinguser->login = $request->get('login');
           $settinguser->password = $request->get('password');
           $settinguser->language = $request->get('language');
        
           $settinguser->save();
      
        return redirect('createsettinguser')->with(['message'=>'insert Setting sucessfull!']);
       }
       public function settingusers(Request $request){
        $requestData = ['name','login','language'];
        $user = $request->input('search');
            $data = DB::table('createsettingusers')->where('name', "like", "%" . $request->search. "%")->get();
        return view('admin.settingusers')->with(['user'=>$user]);
       }
       public function mainsetting(){
        return view('admin.mainsetting');
       }
       public function insertlanguage(Request $request)
       {
 
           $language = new createlanguage;
           $language->language = $request->get('language');
           $language->save();   
      
        return redirect('mainsetting')->with(['message'=>'insert Language sucessfull!']);
       }
       public function createsettingcompanies(Request $request){
 
        return view('admin.createsettingcompanies');
       }
       public function getdis($id)
       {
           $dist = district::where("state_id", $id)->get()->pluck("district_title", "districtid");
   
           return response()->json($dist);
       }
       public function insertcompany(Request $request)
       {
 
           $company = new company;
           $company->name = $request->get('name');
           $company->stat = $request->get('stat');
           $company->dist = $request->get('dist');
           $company->address = $request->get('address');
           $company->gstno = $request->get('gstno');
           $company->comregister = $request->get('comregister');
           $company->currency = $request->get('currency');
           $company->phone = $request->get('phone');
           $company->mobile = $request->get('mobile');
           $company->email = $request->get('email');
           $company->website = $request->get('website');
        
           $company->save();
      
        return redirect('createsettingcompanies')->with(['message'=>'insert Company sucessfull!']);
       }
       public function settingcompanies(Request $request){
        $requestData = ['name','stat','dist','address','gstno','comregister','currency','phone','mobile','email','website'];
        $company = $request->input('search');
            $data = DB::table('companies')->where('name', "like", "%" . $request->search. "%")->get();
        return view('admin.settingcompanies')->with(['company'=>$company]);
       }
       public function settingbackgroundimage(){
        return view('admin.settingbackgroundimage');
       }
       public function createsettingimage(){
        return view('admin.createsettingimage');
       }
       public function insertbackgroundimage(Request $request)
       {
 
           $image = new image;
           $image->name = $request->get('name');
           if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $image->image = $filename;
        }
           $image->save();
        return redirect('createsettingimage')->with(['message'=>'insert Image sucessfull!']);
       }
}
