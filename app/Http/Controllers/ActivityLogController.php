<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    public function index(){
        $activityLogAll = Activity::all();
        return view('layouts.activity-log',['activityLogAll' => $activityLogAll]);
    }
    public function cleanLog(){
        Activity::cleanLog();
    }
    public function searchLogByName($logName){
        $log = Activity::where('log_name' , $logName)->get();
        return view('layouts.activity-log',['activityLog' => $log]);
    }
}
