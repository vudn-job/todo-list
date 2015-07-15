@extends('layouts.master')

@section('content')

<h1>Projects List</h1>
<p class="lead">Here's a list of all your projects. <a href="{{ route('project.create') }}">Add a new one?</a></p>
<hr>
@foreach($projects as $project)
<h3>{{ $project->project_name }}</h3>
<p>{{ $project->description}}</p>
<p>
    <a href="{{ route('project.show', $project->id) }}" class="btn btn-info">View</a>
    <a href="{{ route('project.edit', $project->id) }}" class="btn btn-primary">Edit</a>
</p>
<hr>
@endforeach
@stop