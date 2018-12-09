<?php

namespace App\Http\Controllers;

use App\Commentation;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class ProcessManagementController extends Controller
{
    public function createComment(Request $request){
        $batchId = $request['batchId'];
        $userId = Auth::id();
        $content = $request['content'];
        $type = $request['type']; //import_cmt	feed_cmt	treatment_cmt	vaccination_cmt	handle_dead_pig_cmt	antiseptic_cmt	sell_cmt
        switch ($type){
            case 'import_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'import_cmt' => $content,
                ]);
                break;
            case 'feed_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'feed_cmt' => $content,
                ]);
                break;
            case 'treatment_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'treatment_cmt' => $content,
                ]);
                break;
            case 'vaccination_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'vaccination_cmt' => $content,
                ]);
                break;
            case 'handle_dead_pig_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'handle_dead_pig_cmt' => $content,
                ]);
                break;
            case 'antiseptic_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'antiseptic_cmt' => $content,
                ]);
                break;
            case 'sell_cmt':
                Commentation::create([
                    'user_id' => $userId,
                    'batch_id' => $batchId,
                    'sell_cmt' => $content,
                ]);
                break;
        }
        // create log
        $log = "User ".Auth::user()->name." created comment ".$content;
        activity()
            ->causedBy(auth()->user())
            ->withProperties(['batch_id' => $batchId])
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return redirect()->back()->with('success','create comment success!');
    }
    public function updateComment(Request $request){
        $idComment = $request['id'];
        $type = $request['type'];
        $content = $request['content'];
        switch ($type){
            case 'import_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'import_cmt' => $content,
                    ]);
                break;
            case 'feed_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'feed_cmt' => $content,
                    ]);
                break;
            case 'treatment_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'treatment_cmt' => $content,
                    ]);
                break;
            case 'vaccination_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'vaccination_cmt' => $content,
                    ]);
                break;
            case 'handle_dead_pig_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'handle_dead_pig_cmt' => $content,
                    ]);
                break;
            case 'antiseptic_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'antiseptic_cmt' => $content,
                    ]);
                break;
            case 'sell_cmt':
                Commentation::where('id', $idComment)
                    ->update([
                        'sell_cmt' => $content,
                    ]);
                break;
        }
        // create log
        $log = "User ".Auth::user()->name." updated comment ".$content;
        activity()
            ->causedBy(auth()->user())
            ->withProperties(['id' => $idComment,'user_id' => Auth::id()])
            ->log($log);
        $lastActivity = Activity::all()->last();
        $lastActivity->causer;
        return redirect()->back()->with('success','update comment success!');
    }
    public function updateStatusBatch(Request $request){
        $batchId = $request['batchId'];
        $statusBatch = $request['status'];
        $batch = Batch::where('id', $batchId)->update([
           'status' => $statusBatch
        ]);
        return redirect()->back()->with('success','update batch success!');
    }
}
