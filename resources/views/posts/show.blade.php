@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Post</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID.</th> <th>Title</th><th>Body</th><th>State</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $post->id }}</td> <td> {{ $post->title }} </td><td> {{ $post->body }} </td><td> {{ $post->state }} </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection