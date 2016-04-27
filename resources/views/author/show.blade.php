@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title pull-left">Author</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID.</th> <th>Name</th><th>Bio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $author->id }}</td> <td> {{ $author->name }} </td><td> {{ $author->bio }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection