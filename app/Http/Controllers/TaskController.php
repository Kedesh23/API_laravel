<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //Find all task
    function find_all(){
        $tasks = Task::all();
        return $tasks;
 
    }

    //add a task in DDB

    function add_task(Request $request){

        $request->validate([
            "title" => "required",
            "date" => "required",
            "status" => "required"
        ]);

        $task = new Task();

        $task->title = $request->title;
        $task->date = $request->date;
        $task->status = $request->status;
        $task->save();

    }

    //Find a task
    function find_one($id){
        return Task::find($id);
    }

    //delete a task 
    function delete_task($id){
        $task = Task::find($id);
        $task->delete();
        return "delete with success";
    }

    //Display the tasks 

    public function task(){
        $task = Task::all();
        return view('welcome', compact('task'));
    }

    //Login
    public function login(){
        return view('register');
    }
}
