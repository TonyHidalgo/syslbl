@extends('layouts.app')
@section('title', 'Registrar Estudiante')

@section('styles')
    
@endsection

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3>Datos del Estudiante:</h3>
                        </div>
                        <div class="card-block">
                            <p class="m-0">
                                <form class="forms-sample">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DPApellidos"
                                                    placeholder="Apellidos:" name="DPApellidos">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DPNombres"
                                                    placeholder="Nombres:" name="DPNombres">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DPCedula"
                                                    placeholder="Cedula:" name="DPCedula">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select class="form-control" id="DPAnio" name="DPAnio">
                                                    <option hidden>Año</option>
                                                    <option>1er</option>
                                                    <option>2do</option>
                                                    <option>3er</option>
                                                    <option>4to</option>
                                                    <option>5to</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>Datos del Representante:</h3>
                        </div>
                        <div class="card-block">
                            <p class="m-0">
                                <form class="forms-sample sample-form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DRApellidos"
                                                    placeholder="Apellidos:" name="DRApellidos">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DRNombres"
                                                    placeholder="Nombres:" name="DRNombres">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="DRCedula"
                                                    placeholder="Cedula:" name="DRCedula">
                                            </div>
                                        </div>
                                    </div>
                            </p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <button type="reset" class="btn btn-light">Cancelar</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection