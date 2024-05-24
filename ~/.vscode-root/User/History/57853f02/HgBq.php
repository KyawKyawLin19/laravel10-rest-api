<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCollection;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return new TaskCollection(Task::all());
    }

    public function show(Request $request, Task $task)
    {
        return new TaskResource($task);
    }
}
