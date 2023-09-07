<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.projects.index')->with('projects',Project::orderby('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->image = $request->image->store('projects');
        $project->url = $request->url;
        $project->behance_url = $request->behance_url;
        $project->section = $request->section;
        $project->save();
        return redirect()->route('projects.index')->with(['success'=>'تم انشاء المشروع بنجاح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit')->with('project',$project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->title = $request->title;
        if($request->image != null){
            $project->image = $request->image->store('projects');
        }
        $project->url = $request->url;
        $project->behance_url = $request->behance_url;
        $project->section = $request->section;
        $project->save();
        return redirect()->route('projects.index')->with(['success'=>'تم تعديل المشروع بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with(['success'=>'تم حذف المشروع بنجاح']);

    }
}
