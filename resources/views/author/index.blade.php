@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Author</h3>
            <a href="{{ url('author/create') }}" class="btn btn-primary pull-right btn-sm">Add New Author</a>
        </div>
        <div class="panel-body">
            <div class="table">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S.No</th><th>Name</th><th>Bio</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach($author as $item)
                        {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ url('author', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->bio }}</td>
                            <td>
                                <a href="{{ url('author/' . $item->id . '/edit') }}">
                                    <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                </a> /
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['author', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination"> {!! $author->render() !!} </div>
            </div>
        </div>
    </div>

@endsection
