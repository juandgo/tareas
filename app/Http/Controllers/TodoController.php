<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index',[
            'todos'=> $todos
        ]);
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

    public function show($id){
        $todo = Todo::find($id);
        if(!$todo){
            request()->session()->flash('error','Incapaz de localizar la tarea');
            return to_route('todos.index')->withError([
                'error' => 'Incapaz de localizar la tarea'
            ]);
        }
        return view('todos.show', ['todo' => $todo]);
    }

    public function edit($id){
        $todo = Todo::find($id);
        if(!$todo){
            request()->session()->flash('error','Incapaz de localizar la tarea');
            return to_route('todos.index')->withError([
                'error' => 'Incapaz de localizar la tarea'
            ]);
        }
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request){
        return $request->all();
    }
}
