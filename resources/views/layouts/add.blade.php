@extends('layouts.layout')

@section('content')
  <hr>

    <form action="/tasks" method='post' >
        Task : <input type="text" name="text" >
        User : <input type="text" name="user>">
    </form>


    <button> <a href="/tasks">View all tasks</a></button>
    <button> <a href="/tasks">Add new task</a></button>

@endsection
