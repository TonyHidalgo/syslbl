@extends('layouts.app')
@section('title', 'Inicio')

@section('contenido')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Inicio</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            You are logged in!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection