@extends('layouts.master')
@section ('content')

<title>Edit Project</title>
<h1 class="title">Edit Projects</h1>

    <form method="POST" action="{{route('projects.update', $project->id)}}">
    {{ method_field("PATCH") }}
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="form-control" name="title"  value ="{{$project->title}}"></input>
        </div>
    </div>
    <div class="field">
        <label class="'label" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="textarea">{{ $project->description }}</textarea>
        </div>
        <div class="field">
            <div class="control">
                <input type="submit" class="'button is-link">
                UPDATE
            </div>
        </div>
    </div>
    </form>
@endsection