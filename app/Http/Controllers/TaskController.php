<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Shows all the tasks
     *
     * @return void
     */
    public function index()
    {
        /* Note that the tasks are arranged based on the priority levels. 
        the tasks with higher priority values have more priority */
        $tasks = Task::orderBy('priority', 'desc')->get();
        return view('tasks.index')->with(compact('tasks'));
    }

    /**
     * This method adds a new task
     *
     * @param Request $request
     * @return void
     */
    public function addTask(Request $request)
    {
        if ($request->isMethod('post')) {
            $task_name = $request->task_name;
            $priority = $request->priority;

            $task = new Task;
            $task->task_name = $task_name;
            $task->priority = $priority;
            $task->save();

            return redirect()->route('tasks');
        } else {
            return view('tasks.add');
        }
    }

    /**
     * Edits a task
     *
     * @param Request $request
     * @param integer $id
     * @return void
     */
    public function editTask(Request $request, $id)
    {
        $task = Task::whereId($id)->first();

        if ($request->isMethod('post')) {
            $task_name = $request->task_name;
            $priority = $request->priority;

            $task->task_name = $task_name;
            $task->priority = $priority;
            $task->save();

            return redirect()->route('tasks');
        } else {
            return view('tasks.edit')->with(compact('task'));
        }
    }

    /**
     * Deletes a task
     *
     * @param integer $id
     * @return void
     */
    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks');
    }
}
