@extends('layouts.app')
@section('title', 'Inscribir - Datos Academicos')

@section('contenido')


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" class="form-login" action="{{ route('estudiantes.inscribe-3', $student->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                @csrf

                <div class="card">
                    <div class="card-header">
                        <h3>Datos Academicos del Estudiante:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <div class="row">
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Regular</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DARegular" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DARegular" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Repitiente</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DARepitiente" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DARepitiente" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Materia Pendiente</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAMateriaPendiente" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAMateriaPendiente" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Transferencia</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DATransferencia" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DATransferencia" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Equivalencia</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEquivalencia" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEquivalencia" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Estudios en otro pais</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEstudioOtroPais" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEstudioOtroPais" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p style=" writing-mode: vertical-lr;
                                    transform: rotate(180deg);">Estudios en otro plantel</p>
                                    <div class="form-radio">
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEstudioOtroPlantel" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="DAEstudioOtroPlantel" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <p>Plantel de Procedencia</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="DAPlantelProcedencia" name="DAPlantelProcedencia" value="{{$student->DAPlantelProcedencia}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Indique que materias Pendientes:</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="MateriasPendientes" name="DAMateriasPendientes" value="{{$student->DAMateriasPendientes}}">
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Informacion adicional del estudiante:</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Informe Psicopedagogico:</p>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="IAInformePsicopedagogico" type="radio" checked="checked" value="Si">
                                                    <i class="helper"></i>Si
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="IAInformePsicopedagogico" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Actividades Extracatedra:</p>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input name="IAActividadExtracatedra" type="radio" checked="checked" value="Si">
                                                <i class="helper"></i>Si
                                            </label>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="IAActividadExtracatedra" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="IATalentos" name="IATalentos" placeholder="Talentos Artisticos:" value="{{$student->IATalentos}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <p>Participara en Grupo de Interes:</p>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input name="IAGrupoInteres" type="radio" checked="checked" value="Si">
                                                <i class="helper"></i>Si
                                            </label>
                                        </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input name="IAGrupoInteres" type="radio" value="No">
                                                    <i class="helper"></i>No
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="IAGrupoInteresDescripcion" name="IAGrupoInteresDescripcion" placeholder="Indique:" value="{{$student->IAGrupoInteresDescripcion}}">
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