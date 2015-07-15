@extends('layouts.master')

@section('content')

<h1>{{ $project->project_name }}</h1>
<p class="lead">{{ $project->description }}</p>
<hr>

<div class="" ng-controller="taskController">
    <ul>
        <li ng-repeat="$task in {{ $tasks }}">
            <label>
                <input type="checkbox" value="@{{ $task.id }}" />
                <span ng-click="changeToInput(this)">@{{ $task.task_name}}</span>
                <input type="text" value="@{{ $task.task_name}}" ng-blur="updateTaskName($event)" />
            </label>
        </li>
    </ul>
    <input type="button" value="Add New" />
</div>

<div ng-controller="taskController">
    @{{ greeting}}
</div>

<a href="{{ route('project.index')}}" class="btn btn-info">Back to all project</a>
<a href="{{ route('project.edit', $project->id)}}" class="btn btn-primary">Edit Project</a>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this project</a>
</div>

@stop