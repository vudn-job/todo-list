<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $projects = Project::all();

        return view('project.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('project.create_or_update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'project_name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Project::create($input);

//        Session::flash('flash_message', 'Project successfully added!');
        return redirect()->back()->with('flash_message', 'Project successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $project = Project::findOrFail($id);
        $tasks = Project::find($id)->tasks()->get();
        
        $data = array('project' => $project,
                                'tasks' => $tasks);
        
        return view('project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $project = Project::findOrFail($id);
        return view('project.create_or_update')->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        $this->validate($request, [
            'project_name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $project = Project::findOrFail($id);
//        dd($project);
//        DB::enableQueryLog();
        $project->fill($input)->save();
//        dd(DB::getQueryLog());
        

//        Session::flash('flash_message', 'Task successfully added!');
        return redirect()->back()->with('flash_message', 'Project successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
