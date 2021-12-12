<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //hnn2l al funcs mn al routes l hna
    public function index(){
        $tasks = Task::all();
        return view('layouts/tasks', ['tasks' => $tasks]);
    }

    //retrieve a single record
    public function show($id){
        $task = Task::find($id);
        return view('layouts/task', ['task' => $task]);
    }
    public function add(){
        return view('/add');
    }
}


