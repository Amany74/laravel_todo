@extends('layouts.layout')

@section('content')
  <h1>All Tasks from DB :</h1>
  <hr>

  <table id="customers">
    <tr>
      <th>id</th>
      <th>task</th>
      <th>user</th>
    </tr>


    @foreach ($tasks as $task)
     <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->text}}</td>
        <td>{{$task->user}}</td>
      </tr>
    @endforeach
    <button> <a href="/tasks">View all tasks</a></button>
    <button> <a href="/add">Add new task</a></button>

@endsection
