<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Exception;
use App\Models\chocolate;
use Illuminate\Support\Facades\Storage;

class machinecontroller extends Controller
{
    public function createmachine()
    {
        return view('admin.createmachine');
    }
    public function insertmachine(Request $request)
    {
        $machine = new machine;
        //    $machine->lotno=$request->get('lotno');
        $machine->mname = $request->get('name');
        $machine->growthrate = $request->get('rate');
        $machine->save();
        return redirect('createmachine')->with(['message' => 'Insert Machine Sucessfull!']);
        DB::table('machine')
            ->where('created_at', '<', Carbon::now()->subMinutes(240)->toDateTimeString())->update(['status' => '1']);
    }
    public function deletemachine(Request $request, $id)
    {
        $data = DB::table('machine')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }

    public function machine()
    {
        // $data=DB::table('lot_masters')
        // ->join('machine','lot_masters.id' ,'=','machine.lotno')
        // ->get();
        $data = DB::table('machine')->get();
        // dd($data);
        return view('admin.machine')->with(['data' => $data]);
    }
    public function updateStatus(Request $request)
    {

        $product = machine::find($request->machine_id);
        $product->status = $request->status;
        $product->save();

        DB::table('machine')->where('created_at', '<', Carbon::now()->subMinutes(1)->toDateTimeString())
            ->update(['status' => 'pending']);

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function searchmachine(Request $request)
    {
        $requestData = ['id', 'name', 'growthrate', 'status'];
        $date = $request->all();
        $search = $request->input('datesearch');

        if ($search == "lastmonth") {
            $data = DB::table('machine')->whereMonth('created_at', '=', Carbon::now()->subMonth(1))->get();
        } elseif ($search == "last7days") {
            $data = DB::table('machine')->where('created_at', '>=', Carbon::now()->subDays(7))->get();
        } elseif ($search == "last15days") {
            $data = DB::table('machine')->where('created_at', '>=', Carbon::now()->subdays(15))->get();
        } elseif ($search  == "lastyear") {
            $data = DB::table('machine')->whereYear('created_at', date('Y', strtotime('-1 year')))->get();
        } elseif ($search == "today") {

            $data = DB::table('machine')->whereDate('created_at', Carbon::today())->get();
            // dd($search);
        } elseif ($search == "yesterday") {
            $data = DB::table('machine')->whereDate('created_at', '=', Carbon::yesterday())->get();
        } elseif ($search == "thismonth") {
            $data = DB::table('machine')->whereMonth('created_at', Carbon::now()->month)->get();
        } else {
            $data = DB::table('machine')->get();
        }
        return view('admin.machine')->with(['data' => $data]);
    }
    public function machinemanagement1()
    {
        $a = DB::table('machine')->where('status', '=', '1')->get();
        $b = DB::table('machine')->where('status', '=', '0')->get();
        //       $lot=DB::table('lot_masters')
        //     ->join('machine','lot_masters.id' ,'=','machine.lotno')
        //     ->join('lot_details','machine.lotno','=','lot_details.lot_id')
        //     //  ->join('chocolates','machine.mname','=','chocolates.machineno')
        //     ->select('lot_details.lot_id')->distinct()
        //     ->select('lot_masters.name as name','lot_details.lot_id as lot_id','machine.*')
        // //    ->select('lot_masters.name as name','lot_details.lot_id as lot_id','machine.*','chocolates.starttime as starttime')
        //     ->get();

        $lot = DB::table('machine')
            ->join('chocolates', 'machine.mname', '=', 'chocolates.machineno')
            ->join('lot_details', 'chocolates.lotno', '=', 'lot_details.lot_id')
            ->select('lot_details.lot_id')->distinct()
            ->join('lot_masters', 'chocolates.lotno', '=', 'lot_masters.id')
            ->select('machine.mname as mname', 'machine.growthrate as growthrate', 'chocolates.starttime as starttime', 'chocolates.machineno as machineno', 'lot_masters.name as name', 'lot_details.lot_id as lot_id', 'lot_details.height as height', 'lot_details.pcs as pcs')
            ->get();
        // dd($lot);

        return view('admin.machinemanagement1')->with(['a' => $a, 'b' => $b, 'lot' => $lot]);
    }
    public function startTimermachine(Request $request)
    {
        try {
            $check = machine::where("id", $request->id)->whereNull('stop_timer')->first();
            // dd($check);
            if ($check) {
                machine::where("id", $request->id)->update(['timer' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), ['success' => true]);
        }
    }

    public function stopTimermachine(Request $request)
    {
        try {
            $check = machine::where("id", $request->id)->whereNotNull('timer')->first();
            if ($check) {
                machine::where("id", $request->id)->update(['stop_timer' => Carbon::now()->format('Y-m-d H:i:s')]);
            }
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), ['success' => true]);
        }
    }
}
