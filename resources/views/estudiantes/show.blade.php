@extends('layouts.app')
@section('titlePage', 'Estudiantes')

@section('contenido')

{{dd($student->represent)}}
    
@endsection