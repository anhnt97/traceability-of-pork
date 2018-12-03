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
    public function getListPigByBatch(Request $request){
        $batchId = $request['batchId'];
        $pigs = DB::table('pigs')->where('batch_id','=',$batchId)->paginate(15);
        return view('layouts.breed-management',['pigs' => $pigs]);
    }
    public function getInfoTreatmentByPig(Request $request){
        $pigId = $request['pigId'];
        $treatments = DB::table('treatments')->where('pig_id','=', $pigId);
        return view('layouts.breed-management',['treatments' => $treatments]);
    }
    public function getInfoPigBasic(Request $request){
        $pigId = $request['pigId'];
        $pigInfo = DB::table('pigs')->where('pig_id','=', $pigId);
        return view('layouts.breed-management',['pigInfo' => $pigInfo]);
    }
    public function getListEquipment(){
        $equipments = DB::table('equipments')->paginate(10);
        return view('layouts.breed-management',['equipment' => $equipments]);
    }

}
