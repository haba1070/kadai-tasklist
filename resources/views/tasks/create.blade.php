@extends('layouts.app')

@section('content')

    <h1>Add New Task</h1>
    
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'Task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('status', ['' => '', 'Complete' => 'Complete', 'Progress' => 'Progress', 'Not' => 'Not'], null, ['class' => 'form-control']) !!}
                </div>
            
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
        </div>
    </div>
@endsection