@extends('layouts.master')

@section('content')
@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ Session::get('flash_message') }}
</div>
@endif
<h1>Task List</h1>
<p class="lead">Here's a list of all your tasks. <a href="{{ route('task.create') }}">Add a new one?</a></p>
<hr>

<div class="">
    <ul>
        <li><label><input type="checkbox" value="" /><input type="text" /></label></li>
        <li><label><input type="checkbox" value="" /><input type="text" /></label></li>
    </ul>
    <input type="button" value="Add New" />
</div>

<div ng-app="myApp" ng-controller="GreetingController">
  @{{ greeting }}
</div>

@stop