<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Task;
use App\services\CategoryService;
use App\services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(CategoryService $category, TaskService $task)
    {
        $categories = $category->getCategory();
        $tasks = $task->getTask();

        return view('home', [
            'categories' => $categories,
            'tasks' => $tasks
        ]);

    }

    public function createTask(Request $request)
    {
        $validate = $request->validate ([
                'title' => 'required|string|max:255',
                'description' => 'required',
                'category_id' => 'required',
                'completed' => 'required|boolean'
        ]);
        Task::create($validate);
        return redirect()->route('home')->with('status', 'Task creada correctamente');
    }

    public function updateTask(Request $request, $id)
    {
        $validate = $request->validate ([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'completed' => 'required|boolean'
        ]);

        Task::where('id', $request->id)->update($validate);
        return redirect()->route('home')->with('status', 'Task actualizada correctamente');
    }


    public function updateTaskView($id)
    {
        $tasks = Producto::find($id);
        return view('editar_task_view', compact('tasks'));
    }

    public function deleteTask($id)
    {
        Task::destroy($id);
    }
}   