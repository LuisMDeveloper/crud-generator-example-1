@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Posts</h3>
            <a href="{{ url('posts/create') }}" class="btn btn-primary pull-right btn-sm">Add New Post</a>
        </div>
        <div class="panel-body">
            <div class="table">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>S.No</th><th>Title</th><th>Body</th><th>State</th><th colspan="2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach($posts as $item)
                        {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ url('posts', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td><td>{{ $item->state }}</td>
                            <td>
                                <a href="{{ url('posts/' . $item->id . '/edit') }}">
                                    <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                </a>
                            </td>
                            <td>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['posts', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination"> {!! $posts->render() !!} </div>
            </div>
        </div>
    </div>



@endsection
