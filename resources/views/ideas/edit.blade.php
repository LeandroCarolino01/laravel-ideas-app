@extends('layouts.app')

@section('content')
 <h1 class="text-center my-5">Create Ideas</h1>
 <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card card-default">
        <div class="card-header">Edit an idea</div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                   <ul class="list-group">
                    @foreach($errors->all() as $error)
                          <li class="list-group-item">
                            {{ $error }}
                          </li>  
                    @endforeach
                   </ul>
                </div>
            @endif
            <form action="/ideas/{{ $idea->id }}/update-ideas" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="{{ $idea->name }}">
                </div>

                <div class="form-group">
                    <textarea placeholder="description" class="form-control" name="description" rows="5" cols="5">{{ $idea->description }}
                    </textarea>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Edit an idea</button>
                </div>
             </form>
        </div>
    </div>
    </div>
 </div>
@endsection