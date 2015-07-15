<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TasksController extends Controller 
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $tasks = Task::all();
//dd($tasks);
        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

//        Session::flash('flash_message', 'Task successfully added!');
        return redirect()->back()->with('flash_message', 'Task successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
//        $task = Task::findOrFail($id);
        
//        dd($id);
        $mTask = new Task();
//        dd(Cache::driver());
        
//        dd(Cache::get('task_1'));
        $task = $mTask->getTaskById($id);
        
//        dd($task);

        return view('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $mTask = new Task();
        $task = $mTask->getTaskById($id);

        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $mTask = new Task();
        $task = $mTask->getTaskById($id);
//        dd($task->toArray());
        $task->saveTask($id, $input);
        

//        Session::flash('flash_message', 'Task successfully added!');
        return redirect()->back()->with('flash_message', 'Task successfully added!');
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
