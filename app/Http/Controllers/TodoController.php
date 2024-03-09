<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }

    public function create(){
        return view('todos.create');
    }

    public function store(TodoRequest $request){
        // return $request->all();
        Todo::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'is_completed'=> 0
        ]);

        $request->session()->flash('alert-success','Tarea Creada Exitosamente');

        return to_route('todos.index');
    }
}
