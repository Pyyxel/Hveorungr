<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class index extends Controller
{
    public function index(){
        $formation = DB::table('formations')->get();
        return view('index', ['formation' => $formation]);
    }
}
