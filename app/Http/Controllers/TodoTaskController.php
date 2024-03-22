<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index ()
    {
        $tasks = Task::all();

        return view('home',[
            'tasks' => $tasks,
    ]);
}

    public function tambah(Request $request
    ){
        $request->validate([
            'task' => 'required|min:5',
        ],
        [ 'task.required' => 'Ketik yang benar kontol !',
            'task.min'  =>'Bagus bagus kau bujang !',

        ]);

        Task::create([
            'task' => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect ('/');
    }
}
