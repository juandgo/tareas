@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">App de Tareas</div>

                    <div class="card-body">
                        <h4>Editar Tarea</h4>
                        <form method="post" action="{{ route('todos.update')}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                            <div class="mb-3">
                                <label class="form-label">Titulo</label>
                                <input type="test" name="title" class="form-control" value="{{ $todo->title }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descripción</label>
                                <textarea class="form-control" name="description" cols="5" rows="5">
                                    {{ $todo->description }}
                                </textarea>
                            </div>
                  
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
