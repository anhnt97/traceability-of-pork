<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

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
        return view('layouts.dashboard');
    }
    public function breed(){
        $batches = DB::table('batches')->paginate(10);
        return view('layouts.breed-management',['batches' => $batches]);
    }
    public function process(){
        return view('layouts.process-management');
    }
    public function getListFarm(){
        $farms = DB::table('farms')->paginate(5);
        return view('layouts.dashboard',['farms' => $farms]);
    }
    public function activityLog($userModel,$someContentModel){
        activity()
            ->causedBy(auth()->user())
            ->log('User updated');
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
    }
    public function getActivityLog(){
        $lastActivity = Activity::all()->last(); //returns the last logged activity
        $lastActivity->description;
    }

}
