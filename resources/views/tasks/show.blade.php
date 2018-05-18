@extends('layouts.app')

@section('content')

    <h1>Task No.{{ $task->id }}</h1>

    <p>Task: {{ $task->content }} - Status: {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}

@endsection