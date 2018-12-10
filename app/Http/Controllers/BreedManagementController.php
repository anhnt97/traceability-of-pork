<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BreedManagementController extends Controller
{
    public function getListBatch(){
        $batches = DB::table('batches')->paginate(10);
        return view('layouts.breed-management',['batches' => $batches]);
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
}
