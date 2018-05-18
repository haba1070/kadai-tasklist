@extends('layouts.app')

@section('content')

    <h1>Edit No.{{ $task->id }}</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status:') !!}
        {!! Form::select('status', ['' => '', 'Complete' => 'Complete', 'Progress' => 'Progress', 'Not' => 'Not']) !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection