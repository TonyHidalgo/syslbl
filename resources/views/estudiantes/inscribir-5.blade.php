@extends('layouts.app')
@section('title', 'Inscribir - Muestra de Datos')

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.inscribe-5', $student->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Datos del Estudiante:</h3>
                                </div>
                                <div class="card-block">
                                    <p class="m-0">
                                        <span><b>Apellidos: </b>{{$student->DPApellidos}}</span><br>
                                        <span><b>Nombres: </b>{{$student->DPNombres}}</span><br>
                                        <span><b>Genero: </b>{{$student->DPGenero}}</span><br>
                                        <span><b>Edad: </b>{{$student->DPEdad}}</span><br>
                                        <span><b>Cedula: </b>{{$student->DPCedula}}</span><br>
                                        <span><b>Direccion: </b>{{$student->DPDireccion}}</span><br>
                                        <span><b>Telefono Fijo: </b>{{$student->DPTelefonoFijo}}</span><br>
                                        <span><b>Telefono Celular: </b>{{$student->DPTelefonoCelular}}</span><br>
                                        <span><b>Correo Electronico: </b>{{$student->DPCorreoElectronico}}</span><br>
                                        <span><b>Fecha de Nacimiento: </b>{{$student->DNFechaNacimiento}}</span><br>
                                        <span><b>Nacionalidad: </b>{{$student->DNNacionalidad}}</span><br>
                                        <span><b>Pais: </b>{{$student->DNPais}}</span><br>
                                        <span><b>Lugar de Nacimiento: </b>{{$student->DNLugarNacimiento}}</span><br>
                                        <span><b>Estado: </b>{{$student->DNEstado}}</span><br>
                                        <span><b>Municipio: </b>{{$student->DNMunicipio}}</span><br>
                                        <span><b>Parroquia: </b>{{$student->DNParroquia}}</span><br>
                                    </p>
                                    
                                    <form method="get" action="{{ route('estudiantes.inscribir-1', $student->id) }}">
                                        <button type="submit" class="center btn btn-primary">Modificar Datos</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Datos del Estudiante:</h3>
                                </div>
                                <div class="card-block">
                                    <p class="m-0">
                                        <span><b>Apellidos:</b>{{$student->DPApellidos}}</span><br>
                                        <span><b>Nombres:</b>{{$student->DPNombres}}</span><br>
                                        <span><b>Genero:</b>{{$student->DPGenero}}</span><br>
                                        <span><b>Edad:</b>{{$student->DPEdad}}</span><br>
                                        <span><b>Cedula:</b>{{$student->DPCedula}}</span><br>
                                        <span><b>Direccion:</b>{{$student->DPDireccion}}</span><br>
                                        <span><b>Telefono Fijo:</b>{{$student->DPTelefonoFijo}}</span><br>
                                        <span><b>Telefono Celular:</b>{{$student->DPTelefonoCelular}}</span><br>
                                        <span><b>Correo Electronico:</b>{{$student->DPCorreoElectronico}}</span><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <button type="submit" class="btn btn-success mr-2">Inscribir</button>
                    <button class="btn btn-light">Cancelar</button>
    
                </form>
            </div>



        </div>
    </div>
</div>

@endsection