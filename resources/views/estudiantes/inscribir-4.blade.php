@extends('layouts.app')
@section('title', 'Inscribir - Condiciones de Salud')

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.inscribe-4', $student->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                <div class="card">
                    <div class="card-header">
                        <h3>Condiciones de Salud:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="CSTipoSangre" name="CSTipoSangre" placeholder="Tipo de Sangre:" value="{{$student->CSTipoSangre}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="CSEnfermedades" name="CSEnfermedades" placeholder="Enfermedades:" value="{{$student->CSEnfermedades}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Tiene medicacion de rutina:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSMedicacion" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSMedicacion" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="CSMedicacionDescripcion" name="CSMedicacionDescripcion" placeholder="Cuales:" value="{{$student->CSMedicacionDescripcion}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Otras:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSOtrasEnfermedades" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSOtrasEnfermedades" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Visual:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSVisual" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSVisual" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Auditivo:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSAuditivo" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSAuditivo" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Verbal:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSVerbal" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="CSVerbal" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
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