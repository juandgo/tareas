@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">App de Tareas</div>

                    <div class="card-body">
                        <h4>Editar Tarea</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Titulo</label>
                                <input type="test" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Descripción</label>
                                <textarea class="form-control" name="description" cols="5" rows="5">

                                </textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>


                        todo index page
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
