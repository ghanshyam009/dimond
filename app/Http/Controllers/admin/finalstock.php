<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\batchsquare;
class finalstock extends Controller
{
    public function finalstock(){
        return view('admin.finalstock');
       }
       public function batchsequence(){
        return view('admin.batchsequence');
       }
       public function insertbatchsequence(Request $request)
       {
           $shape = new batchsquare;
           $shape->name = $request->get('name');
           $shape->save();
        return redirect('batchsequence')->with('message', json_encode(['success'=>'Seeds sucessfull!']));
       }

       public function batchsequenceremove(Request $request, $id)
       {
           $data = DB::table('batchsquares')->where('id', $id)->delete();
           return redirect()->back()->with('message', 'delete succesfully');
       }
}
