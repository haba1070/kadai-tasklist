@extends('layouts.app')

@section('content')

    <h1>Edit No.{{ $task->id }}</h1>

    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('status', ['' => '', 'Complete' => 'Complete', 'Progress' => 'Progress', 'Not' => 'Not'], null, ['class' => 'form-control']) !!}
                </div>
                
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
        </div>
    </div>
@endsection