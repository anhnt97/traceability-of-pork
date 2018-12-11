<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $treatments = DB::table('treatments')->where('pig_id','=', $pigId);
        return view('layouts.breed-management',['treatments' => $treatments]);
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
    public function createFood(Request $request){
        $food =  Food::create([
            'name' => $request['name'],
            '' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);
        $activity = Activity::all()->last();

        $activity->description; //returns 'created'
        $activity->subject; //returns the instance of User that was created
        $activity->changes;
        return $user;
    }
}
