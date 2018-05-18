@extends('layouts.app')

@section('content')

    <h1>Add New Task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::select('status', ['' => '', 'Complete' => 'Complete', 'Progress' => 'Progress', 'Not' => 'Not']) !!}
        
        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

@endsection