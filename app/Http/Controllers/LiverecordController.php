<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiverecordController extends Controller
{
    public function index(){
        return view('auth.liverecord');
    }
}
