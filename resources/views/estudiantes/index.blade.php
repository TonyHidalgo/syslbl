@extends('layouts.app')
@section('title', 'Listado de Estudiantes')

@section('styles')
<link rel="stylesheet" href="{{asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('contenido')

<div class="main-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                @if(Session::has('alert'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class="ik ik-eye text-green"></i></strong> {{Session::get('alert')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ik ik-x"></i>
                    </button>
                </div>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Estudiantes</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            @if (@isset($students))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body p-3 table-border-style">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Foto</th>
                                                    <th>Nombre y Apellido</th>
                                                    <th>Cedula</th>
                                                    <th>Año</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($students as $student)
                                                <tr>
                                                    <th scope="row">{{$student->id}}</th>
                                                    <td><img src="{{asset('img/estudiantes')}}/{{$student->DPFoto}}"
                                                            class="table-user-thumb" alt=""></td>
                                                    <td>{{$student->DPApellidos}} {{$student->DPNombres}}</td>
                                                    <td>{{$student->DPCedula}}</td>
                                                    <td>{{$student->DPAnio}}</td>
                                                    <td>
                                                        <div style="text-align:center !important;"
                                                            class="table-actions">
                                                            <form action="{{ route('estudiantes.show', $student->id) }}"
                                                                class="d-inline" method="get">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-icon btn-outline-success"><i
                                                                        class="ik ik-eye"></i></button>
                                                            </form>
                                                            <form action="{{ route('estudiantes.edit', $student->id) }}"
                                                                class="d-inline" method="get">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-icon btn-outline-primary"><i
                                                                        class="ik ik-edit"></i></button>
                                                            </form>
                                                            <form
                                                                action="{{ route('estudiantes.destroy', $student->id) }}"
                                                                class="d-inline" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-icon btn-outline-danger"><i
                                                                        class="ik ik-trash-2"></i></button>
                                                            </form>
                                                            @if (!$student->Inscripcion)
                                                            <form
                                                                action="{{ route('estudiantes.inscribir-1', $student->id) }}"
                                                                class="d-inline" method="get">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-icon btn-outline-dark"><i
                                                                        class="ik ik-check-square"></i></button>
                                                            </form>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="alert alert-danger" role="alert">
                                <p>No hay estudiantes para mostar</p>
                            </div>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Estudiantes</h3>
                    </div>
                    <div class="card-block">
                        <p class="m-0">
                            @if (@isset($students))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body p-3 table-border-style">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Foto</th>
                                                    <th>Nombre y Apellido</th>
                                                    <th>Cedula</th>
                                                    <th>Año</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($represents as $student)
                                                <tr>
                                                    <th scope="row">{{$student->id}}</th>
                                                    <td><img src="{{asset('img/estudiantes')}}/{{$student->DRFoto}}"
                                                            class="table-user-thumb" alt=""></td>
                                                    <td>{{$student->DRApellidos}} {{$student->DRNombres}}</td>
                                                    <td>{{$student->DRCedula}}</td>
                                                    <td>aas</td>
                                                    <td>
                                                        <div style="text-align:center !important;"
                                                            class="table-actions">

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="alert alert-danger" role="alert">
                                <p>No hay estudiantes para mostar</p>
                            </div>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="{{asset('plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function() {
    $('data_table').DataTable();
} );
</script>


<!--<script src="{{asset('js/tables.js')}}"></script>-->


<script src="{{asset('js/datatables.js')}}"></script>

@endsection