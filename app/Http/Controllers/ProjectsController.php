<?php

namespace App\Http\Controllers;

use Validator;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::findorfail($id);

        return view('projects.edit', compact('project'));


    }

    public function show(Project $project, $id)

    {
        $project = Project::find($id);

        return view('projects.show', compact('project'));
    }


    public function create()

    {
        return view('projects.create');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required',

        ]);

        $project = Project::findorfail($id);
        $project->update($request->all());
        return redirect('/projects');
    }


    public function store(Request $request)
    {
        $request = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);


        Project::create(request(['title', 'description']));

        return redirect('/projects');


    }

    public function destroy($id)

    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects');
    }



}