
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


     <tr>
         <h1>Order for {{$task->user}} </h1>
        <td>{{$task->id}}</td>
        <td>{{$task->text}}</td>
        <td>{{$task->user}}</td>

      </tr>

      <button> <a href="/tasks">Back to tasks</a></button>

@endsection
