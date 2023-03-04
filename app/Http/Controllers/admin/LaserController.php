<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaserController extends Controller
{
        public function laser1(){
      return view('admin.laser1');
     }
          public function lotsdashboard(){
      return view('admin.lotsdashboard');
    }
    public function packetlaserdashboard(){
      return view('admin.packetlaserdashboard');
    }
     public function machinelaser(){
      return view('admin.machinelaser');
    }
}