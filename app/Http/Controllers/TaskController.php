<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return response()->json($tasks);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$task= Task::create($request->all());
if($task){
    
   // $tasks = Task::orderBy('created_at', 'desc')->get();
    //return response()->json($tasks); 
return $this->refresh();
}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
$task =Task::find($id);
return response()->json($task); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
 
        $task =Task::find($id);
        $task->name =request('name');
        $task->save();

        if($task){
            return $this->refresh();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
 $task =Task::find($id);
 if($task->delete()){
    return $this->refresh();
 }else{
    return response()->json(['error' => 'Destroy method has failed.'],425);
 }
    }
    private function refresh(){
           $tasks = Task::orderBy('created_at', 'desc')->get();
    return response()->json($tasks); 
    }
}
