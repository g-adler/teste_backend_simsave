<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{

    public function createWorker(Request $request)
    {
    	$worker = new Worker($request->all());
    	$worker->save();

    	return $worker;
    }

    public function editWorker(Request $request)
    {
    	$worker = Worker::findOrFail($request->id);
    	$worker->update($request->all());

    	return $worker;
    }

    public function deleteWorker(Request $request)
    {
    	Worker::findOrFail($request->id)->delete();
    }
}
