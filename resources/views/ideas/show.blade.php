@extends('layouts.app')

@section('title')
    Single Idea: {{ $idea->name}}
@endsection

@section('content')
    <h1 class="text-center my-5">
        {{ $idea->name }}
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{ $idea->description}}
            </div>
         
         <a href="/">back</a>
        </div>
        <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-info btn-sm my-2">edit</a>
        </div>
    </div>
@endsection