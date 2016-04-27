@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Edit Author</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($author, [
                'method' => 'PATCH',
                'url' => ['author', $author->id],
                'class' => 'form-horizontal'
            ]) !!}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bio') ? 'has-error' : ''}}">
                {!! Form::label('bio', 'Bio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

@endsection