<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jangad;
use Illuminate\Http\Request;
use App\Models\party;
use App\Models\jobwork;
use Carbon\Carbon;

class jobworkcontroller extends Controller
{
    public function createparty()
    {
        return view('admin.createparty');
    }
    public function insertparty(Request $request)
    {
        $party = new party;
        $party->name = $request->get('name');
        $party->info = $request->get('info');
        $party->company = $request->get('company');
        $party->code = $request->get('code');
        $party->position = $request->get('position');
        $party->street = $request->get('street');
        $party->street2 = $request->get('street2');
        $party->city = $request->get('city');
        $party->state = $request->get('state');
        $party->country = $request->get('country');
        $party->zip = $request->get('zip');
        $party->phone = $request->get('phone');
        $party->mobile = $request->get('mobile');
        $party->email = $request->get('email');
        $party->website = $request->get('website');
        $party->gst = $request->get('gst');
        $party->title = $request->get('title');
        $party->gstin = $request->get('gstin');
        $party->language = $request->get('language');
        $party->tag = $request->get('tag');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('partyimage', $filename);
            $party->image = $filename;
        }
        $party->save();

        return redirect('createparty')->with(['message' => 'Insert Party Sucessfull!']);
    }
    public function party()
    {
        return view('admin.party');
    }
    public function createjobwork1()
    {
        $date = Carbon::now()->toDateTimeString();
        $length = Carbon::now()->addDays(2)->toDateTimeString();
        return view('admin.createjobwork1')->with(['date' => $date, 'length' => $length]);
    }
    public function jobwork1()
    {
        return view('admin.jobwork1');
    }
    public function insertjobwork(Request $request)
    {
        $jobwork = new jobwork;
        $jobwork->party = $request->get('party');
        $jobwork->date = $request->get('date');
        $jobwork->return_date = $request->get('return_date');
        $jobwork->note = $request->get('note');
        $jobwork->pcs = $request->get('pcs');
        $jobwork->weight = $request->get('weight');
        $jobwork->height = $request->get('height');
        $jobwork->length = $request->get('length');
        $jobwork->width = $request->get('width');
        $jobwork->save();

        return redirect('createjobwork1')->with(['message' => 'Insert Jobwork Sucessfull!']);
    }
    public function jangad()
    {
        return view('admin.jangad');
    }
    public function createJangad()
    {
        $date = Carbon::now()->toDateTimeString();
        $length = Carbon::now()->addDays(2)->toDateTimeString();
        return view('admin.createJangad')->with(['date' => $date, 'length' => $length]);
    }
    public function insertjangad(Request $request)
    {
        $jobwork = new jangad;
        $jobwork->party = $request->get('party');
        $jobwork->date = $request->get('date');
        $jobwork->return_date = $request->get('return_date');
        $jobwork->note = $request->get('note');
        $jobwork->pcs = $request->get('pcs');
        $jobwork->weight = $request->get('weight');
        $jobwork->height = $request->get('height');
        $jobwork->length = $request->get('length');
        $jobwork->width = $request->get('width');
        $jobwork->save();
        return redirect('createJangad')->with(['message' => 'Insert Jangad Sucessfull!']);
    }
}
