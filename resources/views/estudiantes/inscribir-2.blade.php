@extends('layouts.app')
@section('title', 'Inscribir - Convivencia Familiar')

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.inscribe-2', $student->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf


                <div class="card">
                    <div class="card-header">
                        <h3>Datos del Representante Legal:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRApellidos" name="DRApellidos" placeholder="Apellidos:" value="{{$student->represent->DRApellidos}}"> 
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRNombres" name="DRNombres" placeholder="Nombres:" value="{{$student->represent->DRNombres}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRCedula" name="DRCedula" placeholder="Cedula:" value="{{$student->represent->DRCedula}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRProfesion" name="DRProfesion" placeholder="Profesion:" value="{{$student->DRProfesion}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRDestrezas" name="DRDestrezas" placeholder="Destrezas:" value="{{$student->DRDestrezas}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRCorreoElectronico" name="DRCorreoElectronico" placeholder="Correo Electronico:" value="{{$student->DRCorreoElectronico}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRDireccionTrabajo" name="DRDireccionTrabajo" placeholder="Direccion de Trabajo:" value="{{$student->DRDireccionTrabajo}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRTelefonoTrabajo" name="DRTelefonoTrabajo" placeholder="Telefono de Trabajo:" value="{{$student->DRTelefonoTrabajo}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRDireccionHabitacion" name="DRDireccionHabitacion" placeholder="Direccion de Habitacion:" value="{{$student->DRDireccionHabitacion}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DRTelefonoHabitacion" name="DRTelefonoHabitacion" placeholder="Telefono de Habitacion:" value="{{$student->DRTelefonoHabitacion}}">
                                    </div>
                                </div>
                            </div>
                            
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Problemas de Indole Familiar:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Violencia Familiar:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFViolenciaFamiliar" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFViolenciaFamiliar" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Desempleo:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFDesempleo" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFDesempleo" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Falta de Ingreso:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFFaltaIngreso" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFFaltaIngreso" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Adicciones:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFAdicciones" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFAdicciones" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Enfermedades:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFEnfermedades" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="PFEnfermedades" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="PFOtros" name="PFOtros" placeholder="Otros:" value="{{$student->PFOtros}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="PFObservaciones" name="PFObservaciones" placeholder="Observaciones:" value="{{$student->PFObservaciones}}">
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Datos de la Vivienda:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="DVTipoVivienda" name="DVTipoVivienda">
                                            <option hidden selected>Tipo de Vivienda</option>
                                            <option>Casa</option>
                                            <option>Quinta</option>
                                            <option>Apartamento</option>
                                            <option>Rancho</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DVTipoViviendaOtro" name="DVTipoViviendaOtro" placeholder="Indique:" value="{{$student->DVTipoViviendaOtro}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" id="DVDormitorios" name="DVDormitorios">
                                            <option hidden selected>Numero de Dormitorios</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" id="DVCondiciones" name="DVCondiciones">
                                            <option hidden selected>Condicion de la Vivienda</option>
                                            <option>Excelente</option>
                                            <option>Buena</option>
                                            <option>Regular</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="DVTenencia" name="DVTenencia">
                                            <option hidden selected>Tenencia de la Vivienda</option>
                                            <option>Propia</option>
                                            <option>Pagada</option>
                                            <option>Pagandose</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DVTenenciaOtro" name="DVTenenciaOtro" placeholder="Indique:" value="{{$student->DVTenenciaOtro}}">
                                    </div>
                                </div>
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