<?php

namespace App\Http\Controllers;

use App\Models\Antiseptic;
use App\Models\Feed;
use App\Models\Food;
use App\Models\Sell;
use App\Models\Vaccination;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class BreedManagementController extends Controller
{
    public function getListBatch(){
        $batches = DB::table('batches')->paginate(10);
        return view('layouts.breed-management',['batches' => $batches]);
    }
    public function getBreedInfo($batchId){
        $breed = DB::table('batches')->where('id', $batchId)->first();
        return view('layouts.breed-info',['breed' => $breed]);
    }
    public function getImportInfo($batchId){
        $importId = DB::table('batches')->where('id', $batchId)->value('import_id');
        $import = DB::table('import_info')->find($importId);
        return view('layouts.import-info',['import' => $import]);
    }
    public function getFeed($batchId){
        $feeds = DB::table('feeds')->where('batch_id','=',$batchId)->paginate(10);
        return view('layouts.feed',['feeds' => $feeds]);
    }
    public function getVaccination($batchId){
        $vaccinations = DB::table('vaccinations')->where('batch_id','=',$batchId)->paginate(10);
        return view('layouts.vaccination',['vaccinations' => $vaccinations]);
    }
    public function getAntiseptic($batchId){
        $antiseptics = DB::table('antiseptic')->where('batch_id','=',$batchId)->paginate(10);
        return view('layouts.antiseptic',['antiseptics' => $antiseptics]);
    }
    public function getSell($batchId){
        $sells = DB::table('sells')->where('batch_id','=',$batchId)->paginate(10);
        return view('layouts.sell',['sells' => $sells]);
    }
    public function getListPigByBatch($batchId){
        $pigs = DB::table('pigs')->where('batch_id','=',$batchId)->paginate(15);
        return view('layouts.listpig-management',['pigs' => $pigs]);
    }
    public function getInfoTreatmentByPig($pigId){
        $treatments = DB::table('treatments')->where('pig_id','=', $pigId)->paginate(15);
        return view('layouts.treatment',['treatments' => $treatments]);
    }
    public function getInfoPigBasic($pigId){
        $pigInfo = DB::table('pigs')->where('id','=', $pigId)->first();
        return view('layouts.pigInfo-management',['data' => $pigInfo]);
    }
    public function getListEquipment(){
        $equipments = DB::table('equipments')->paginate(10);
        return view('layouts.list-equipment-management',['datas' => $equipments]);
    }
    public function getListFood(){
        $foods = DB::table('foods')->paginate(10);
        return view('layouts.list-food-management',['datas' => $foods]);
    }
    public function getFeedByBatch($batchId){
        $feeds = DB::table('feeds')->where('batch_id','=',$batchId);
        return view('layouts.breed-management',['feeds' => $feeds]);
    }
    public function getHandleDeadPigs($batchId){
        $handleDead = DB::table('handle_dead_pigs')->where('batch_id','=',$batchId);
        return view('layouts.breed-management',['feeds' => $handleDead]);
    }
    public function getSellByBatch($batchId){
        $sells = DB::table('sells')->where('batch_id','=',$batchId);
        return view('layouts.breed-management',['sells' => $sells]);
    }
    public function feeding(Request $request){
        $feed =  Feed::create([
            'name' => $request['name'],
            'mass' => $request['mass'],
            'batch_id' => $request['batch_id'],
            'mix_id' => $request['mix_id'],
            'feeder' => $request['feeder']
        ]);
        // create log
        $log = "User ".Auth::user()->name." create feeding";
        activity()
            ->causedBy(auth()->user())
            ->withProperties($feed)
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return back()->with('success','Cho ăn thành công!');
    }
    public function vaccination(Request $request){
        $vaccination =  Vaccination::create([
            'name' => $request['name'],
            'dose' => $request['dose'],
            'batch_id' => $request['batch_id'],
            'doctor' => $request['doctor'],
            'purpose' => $request['purpose'],
            'result' => $request['result']
        ]);
        // create log
        $log = "User ".Auth::user()->name." create vaccination";
        activity()
            ->causedBy(auth()->user())
            ->withProperties($vaccination)
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return back()->with('success','Tiêm phòng thành công!');
    }
    public function cleaning(Request $request){
        $antiseptic =  Antiseptic::create([
            'equipment_id' => $request['equipment_id'],
            'dose' => $request['dose'],
            'batch_id' => $request['batch_id'],
            'insecticide' => $request['insecticide'],
            'executor' => $request['executor']
        ]);
        // create log
        $log = "User ".Auth::user()->name." create cleaning";
        activity()
            ->causedBy(auth()->user())
            ->withProperties($antiseptic)
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return back()->with('success','Dọn vệ sinh thành công!');
    }
    public function selling(Request $request){
        $sell =  Sell::create([
            'batch_id' => $request['batch_id'],
            'amount' => $request['amount'],
            'seller' => $request['seller'],
            'buyer' => $request['buyer'],
            'buyer_address' => $request['buyer_address'],
            'last_treatment' => new Carbon('2018-01-23 11:53:20'),
            'sell_at' => Carbon::now(),
            ]);
        // create log
        $log = "User ".Auth::user()->name." create selling";
        activity()
            ->causedBy(auth()->user())
            ->withProperties($sell)
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return back()->with('success','Bán thành công!');
    }
}
