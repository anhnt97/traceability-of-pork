<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.master');
    }
    public function breed(){
        return view('layouts.breed-management');
    }
    public function process(){
        return view('layouts.process-management');
    }
    public function getListFarm(){
        $farms = DB::table('farms')->paginate(5);
        return view('layouts.dashboard',['farms' => $farms]);
    }
}
