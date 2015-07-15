@extends('layouts.master')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

 @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<h1>Add a New Task</h1>
<p class="lead">Add to your task list below.</p>
<hr>

<form role="form" action="{{ route('tasks.store') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop