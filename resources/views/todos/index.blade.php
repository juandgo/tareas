@extends('layouts.app')

@section('styles')
<style>
    #outer
    {
        width: auto;
        text-align: center;
    }
    .inner{
        display: inline-block;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if (Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif

                        @if (Session::has('alert-info'))
                            <div class="alert alert-info" role="alert">
                                {{ Session::get('alert-info') }}
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        <a class="btn btn-sm btn-info" href="{{ route('todos.create' )}}">Crear Tarea</a>


                        @if(count($todos) > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descripciòn</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todos as $todo)
                                        <tr>
                                            <td>{{ $todo->title }}</td>
                                            <td>{{ $todo->description }}</td>
                                            <td>
                                                @if ($todo->is_completed == 1)
                                                    <a class="btn btn-success btn-sm" href="">Completada</a>
                                                @else
                                                    <a class="btn btn-danger btn-sm" href="">Incompleta</a>
                                                @endif
                                            </td>
                                            <td id="outer">
                                                <a class="inner btn btn-success btn-sm" href="{{ route('todos.show', $todo->id)}}">Ver</a>
                                                <a class="inner btn btn-info btn-sm" href="{{  route('todos.edit', $todo->id) }}">Editar</a>
                                                <form method="post" action="{{ route('todos.destroy')}}" class="inner">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                                    <input type="submit" class="btn btn-danger btn-sm" value="Borrar">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                        <h4>Aun no hay tareas creadas</h4>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
