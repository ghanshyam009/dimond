<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaningController extends Controller
{
    public function planingFile()
    {
        return view('admin.planing');
    }

   public function fileupload(Request $request)
   {
        if($files=$request->file('uploadfile')){  
            $name=$files->getClientOriginalName();  
            $files->move('planing',$name);  
            DB::table('palning')->insert(
                [
                    'file_name' => $name, 
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
        return redirect('/planingFile');
   }

   public function deleteFile($id)
   {
        DB::table('palning')->where('id',$id)->delete();
        return redirect('/planingFile');
   }
}   
    