@extends('layouts.master')
@section('content')

    <h1>Projects</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-header">
                <div class="card-body">
                    <table id="data-table" class="table">
                        <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $key => $project)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}"method="PUT">Edit</a>
                                    <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure')" class="btn btn-danger"/>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

