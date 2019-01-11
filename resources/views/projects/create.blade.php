@extends('layouts.master')

@section('content')
    <title>very first site </title>


    <h1>Create a new Projects</h1>


    <h2 class="field">Add title</h2>



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{route('projects.store')}}">

        {!! csrf_field() !!}

        <div class="form-group">


        </div>
        <div class="form-group">
            <textarea type="text" name="title" placeholder="Project title"></textarea>
        </div>


        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>


        <div>
            <button type="submit">Create Project</button>

        </div>

    </form>
@stop
