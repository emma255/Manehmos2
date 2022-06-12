<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'participant' => 'required',
            'comments' => 'required',
            'start_date' => 'required |before:end_date',
            'end_date' => 'required |after:start_date',
        ]);

        $task = Tasks::create(request(['name', 'participant', 'comments', 'start_date', 'end_date',]));

        if (!$task) {
            session()->flash('error', 'Task not added. Refresh and try again.');
            return back();
        }

        session()->flash('success', 'Task added.');
        return redirect()->route('tasks.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $task = Tasks::find($request->id);

        if (!$task) {
            session()->flash('error', 'Task not found. Refresh and try again.');
            return back();
        }

        return view('tasks.view', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $task = Tasks::find($request->id);

        if (!$task) {
            session()->flash('error', 'Task not found. Refresh and try again.');
            return back();
        }

        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasks $tasks)
    {
        $task = Tasks::find($request->id);

        if (!$task) {
            session()->flash('error', 'Task not found. Refresh and try again.');
            return back();
        }

        $update =  $task->update(request(['name', 'participant', 'comments', 'start_date', 'end_date',]));

        if (!$update) {
            session()->flash('error', 'Task not updated. Refresh and try again.');
            return back();
        }

        session()->flash('success', 'Task updated.');
        return redirect()->route('tasks.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Tasks::find($request->id)->delete() ? session()->flash('success', 'Task deleted.')
            : session()->flash('error', 'Task not deleted. Refresh and try again.');

        return back();
    }
}
