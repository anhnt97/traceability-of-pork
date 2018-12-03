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
        return view('layouts.breed-management',['pigs' => $pigs]);
    }
    public function getInfoTreatmentByPig($pigId){
        $treatments = DB::table('treatments')->where('pig_id','=', $pigId);
        return view('layouts.breed-management',['treatments' => $treatments]);
    }
    public function getInfoPigBasic($pigId){
        $pigInfo = DB::table('pigs')->where('pig_id','=', $pigId);
        return view('layouts.breed-management',['pigInfo' => $pigInfo]);
    }
    public function getListEquipment(){
        $equipments = DB::table('equipments')->paginate(10);
        return view('layouts.breed-management',['equipments' => $equipments]);
    }
    public function getListFood(){
        $foods = DB::table('foods')->paginate(10);
        return view('layouts.breed-management',['foods' => $foods]);
    }
}