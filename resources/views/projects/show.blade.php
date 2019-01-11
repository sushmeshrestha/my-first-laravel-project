@extends('master')

@section('content')

    <h1 class="title">Edit Projects</h1>

    <div class="content">{{ $project->description }}</div>
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>



@endsection