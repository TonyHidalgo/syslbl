@extends('layouts.app')
@section('title', 'Inscribir - Datos Personales')

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.inscribe-1', $student->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                <div class="card">
                    <div class="card-header">
                        <h3>Datos del Estudiante:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <form class="forms-sample">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DPApellidos" placeholder="Apellidos" name="DPApellidos" value="{{$student->DPApellidos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DPNombres" placeholder="Nombres:" name="DPNombres" value="{{$student->DPNombres}}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="DPEdad" placeholder="Edad:" name="DPEdad" value="{{$student->DPEdad}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DPCedula" placeholder="Cedula:" name="DPCedula" value="{{$student->DPCedula}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="DNFechaNacimiento" placeholder="Fecha de Nacimiento:" name="DNFechaNacimiento" value="{{$student->DNFechaNacimiento}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select class="form-control" id="DNNacionalidad" name="DNNacionalidad">
                                                <option>Venezolano(a)</option>
                                                <option>Extranjero(a)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DNPais" placeholder="Pais:" name="DNPais" value="{{$student->DNPais}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DNLugarNacimiento" placeholder="Lugar de Nacimiento:" name="DNLugarNacimiento" value="{{$student->DNLugarNacimiento}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DNParroquia" placeholder="Parroquia:" name="DNParroquia" value="{{$student->DNParroquia}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DNMunicipio" placeholder="Municipio:" name="DNMunicipio" value="{{$student->DNMunicipio}}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DNEstado" placeholder="Estado:" name="DNEstado" value="{{$student->DNEstado}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="DPDireccion" placeholder="Direccion:" name="DPDireccion" value="{{$student->DPDireccion}}">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DPTelefonoFijo" placeholder="Tefeleno Local (Fijo):" name="DPTelefonoFijo" value="{{$student->DPTelefonoFijo}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="DPTelefonoCelular" placeholder="Telefono Celular:" name="DPTelefonoCelular" value="{{$student->DPTelefonoCelular}}">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" id="DPCorreoElectronico" placeholder="Correo Electronico:" name="DPCorreoElectronico" value="{{$student->DPCorreoElectronico}}">
                                </div>                          
                        </p>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary mr-2">Siguiente</button>
                <button class="btn btn-light">Cancel</button>

                </form>
                
                



            </div>
        </div>
    </div>
</div>

@endsection