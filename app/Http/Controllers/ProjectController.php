<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        return view('project');
    }
    public function store(Request $request) {
        $project = new Project();

        $project->name = $request->input('name');
        $project->email = $request->input('email');
        $project->message = $request->input('message');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/project/', $filename);
            $project->image = $filename;
        } else {
            return $request;
            $project->image = '';
        }
        $project->save();
        return view('project')->with('project', $project);
    }
}
