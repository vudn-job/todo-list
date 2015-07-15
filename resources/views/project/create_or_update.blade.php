@extends('layouts.master')

@section('content')
@if($errors->any())
    @include('partials.error', ['errors' => $errors])
@endif

@include('partials.flash_message')
@if (isset($project))
    <h1>Edit Project</h1>
@else
    <h1>Add New Project</h1>
    <p class="lead">Add to your project list below.</p>
    <hr>
@endif


@if (isset($project))
   {!! Form::model($project, ['method' => 'PATCH', 'route' => ['project.update', $project->id]]) !!}
@else
    {!!  Form::open(['route' => 'project.store']) !!}
@endif

<div class="form-group">
    {!! Form::label('project_name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
 
{!! Form::close() !!}

@stop