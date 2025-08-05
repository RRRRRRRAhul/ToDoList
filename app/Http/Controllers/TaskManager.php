<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class TaskManager extends Controller
{
    public function addTask()
    {
        return view('tasks.add');
    }

    public function addTaskPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deadline' => 'required',
            'description' => 'nullable|string|max:1000',
        ]);

        // Logic to save the task to the database would go here
        $task = new Task();
        $task->title = $request->title;
        $task->deadline = $request->deadline;
        $task->description = $request->description;

        if ($task->save()) {
            return redirect()->route('home')->with('success', 'Task added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add task. Please try again.');
        }
    }

    public function tasksList()
    {
        $tasks = Task::where('status', NULL)->paginate(3);
        return view('welcome', compact('tasks'));
    }

    public function UpdateTaskStatus($id)
    {
        if (Task::where('id', $id)->update(['status' => 'completed'])) {
            return redirect()->route('home')->with('success', 'Task status updated successfully!');
        }
        return redirect()->route('home')->with('error', 'Failed to update task status.');

    }

    public function DeleteTaskStatus($id)
    {
        if (Task::where('id', $id)->delete()) {
            return redirect()->route('home')->with('success', 'Task status deleted successfully!');
        }
        return redirect()->route('home')->with('error', 'Failed to delete task status.');

    }
}
