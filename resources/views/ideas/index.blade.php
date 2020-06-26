@extends('layouts.app')

@section('title')
    Ideas List
@endsection

@section('content')

<h1 class="text-center my-5">Ideas page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 offet-md-2">
        <card class="card card-default">
        <div class="card-header">
            Ideas
        </div>
        <div class="card-body">
            <ul class="list-group">
                    @foreach($ideas as $idea)

                    <li class="list-group-item">
                        {{ $idea->name }}
                        <a href="/ideas/{{ $idea->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
                    @endforeach
                </ul>
                <a href="/">Back</a>
        </div>
        </card>
        </div>
    </div>
 @endsection