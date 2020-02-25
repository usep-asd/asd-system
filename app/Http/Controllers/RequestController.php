<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function rrf(){
        return view('requests.rrf');
    }

    public function srf_ict(){
        return view('requests.srf-ict');
    }

    public function srf_vhc(){
        return view('requests.srf-vhc');
    }

    public function wfe_pm(){
        return view('requests.wfe-pm');
    }

    public function wfe_lab(){
        return view('requests.wfe-lab');
    }
}
