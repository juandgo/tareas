@extends('layouts.app')

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


                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Completed</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
