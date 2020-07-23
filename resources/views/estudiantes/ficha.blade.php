<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="./bootstrap.min.css">

  <title>Laravel y data en PDF | Rimorsoft Online</title>

  <style>
  .fontsize{
    font-size: 10px;
  }
  table{
    border-collapse: collapse;
    border: none;
}
td{
    padding: 0 0 0 2px;
}
.verticalText {
  /* Abs positioning makes it not take up vert space */
  position: absolute;

  /* Border is the new background */
  background: none;

  /* Rotate from top left corner (not default) */
  transform-origin: 10 10;
  transform: rotate(90deg);

}
  </style>

</head>

<body>
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

      </div>
    </div>
  <div class="row">
    <div class="col-xs-12">
      <table width="100%" border="1">

        <tbody>
          <tr align="center">
            <td colspan="5"><b> DATOS DEL ESTUDIANTE </b></td>
          </tr>
          <tr>
            <td colspan="2"><span class="fontsize "> Nombres:</span><br> {{$student->DPNombres}}</td>
            <td colspan="2"><span class="fontsize"> Apellidos:</span><br> {{$student->DPApellidos}}</td>
            <td><span class="fontsize"> Edad:</span><br> {{$student->DPEdad}}</td>
          </tr>
          <tr>
            @if ($student->DNNacionalidad == "Venezolana")
            <td><span class="fontsize"> C.I:</span><br> V-{{$student->DPCedula}}</td>                
            @else
            <td><span class="fontsize"> C.I:</span><br> E-{{$student->DPCedula}}</td>    
            @endif
            <td colspan="2"><span class="fontsize"> Fecha de Nacimiento:</span><br> {{$student->DNFechaNacimiento}}</td>
            <td><span class="fontsize"> Nacionalidad:</span><br> {{$student->DNNacionalidad}}</td>
            <td><span class="fontsize"> Pais:</span><br> {{$student->DNPais}}</td>
          </tr>
          <tr>
            <td colspan="2"><span class="fontsize"> Lugar de Nacimiento:</span><br> {{$student->DNLugarNacimiento}}</td>                
            <td><span class="fontsize"> Parroquia:</span><br> {{$student->DNParroquia}}</td>
            <td><span class="fontsize"> Municipio:</span><br> {{$student->DNMunicipio}}</td>
            <td><span class="fontsize"> Estado:</span><br> {{$student->DNEstado}}</td>
          </tr>
          <tr>
            <td colspan="5"><span class="fontsize"> Direccion:</span><br> {{$student->DPDireccion}}</td>
          </tr>
          <tr>
            <td><span class="fontsize"> Telefono Fijo:</span><br>{{$student->DPTelefonoFijo}}</td>
            <td><span class="fontsize"> Telefono Celular:</span><br>{{$student->DPTelefonoCelular}}</td>
            <td colspan="3"><span class="fontsize"> Correo Electronico:</span><br>{{$student->DPCorreoElectronico}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> DATOS ACADEMICOS DEL ESTUDIANTE </b></td>
          </tr>
          <tr>
            <td><span class="fontsize">Regular:</span><br>{{$student->DARegular}}</td>
            <td><span class="fontsize">Repitiente:</span><br>{{$student->DARegular}}</td>
            <td colspan="3" rowspan="2">Plantel de Procedencia</td>
          </tr>
          <tr>
            <td><span class="fontsize">Transferencia:</span><br>{{$student->DATransferencia}}</td>
            <td><span class="fontsize">Equivalencia:</span><br>{{$student->DAEquivalencia}}</td>
          </tr>
          <tr>
            <td><span class="fontsize">Estudios en otro Pais:</span><br>{{$student->DAEstudioOtroPais}}</td>
            <td><span class="fontsize">Estudios en otro Plantel:</span><br>{{$student->DAEstudioOtroPlantel}}</td>
            <td colspan="3" rowspan="2">Indique Materias Pendientes:</td>
          </tr>
          <tr>
            <td><span class="fontsize">Materia Pendiente</span><br>{{$student->DAMateriaPendiente}}</td>
            <td><span class="fontsize">Indique las Materias Pendientes:</span><br>{{$student->DAMateriasPendientes}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> CONDICIONES DE SALUD </b></td>
          </tr>
          <tr>
            <td><span class="fontsize">Tipo de Sangre:</span><br>{{$student->CSTipoSangre}}</td>
            <td colspan="4"><span class="fontsize">Enfermedades:</span><br>{{$student->CSEnfermedades}}</td>
          </tr>
          <tr>
            <td><span class="fontsize">Tiene Medicacion de Rutina:</span><br>{{$student->CSMedicacion}}</td>
            <td colspan="4"><span class="fontsize">Cuales:</span><br>{{$student->CSMedicacionDescripcion}}</td>
          </tr>
          <tr>
            <td colspan="2"><span class="fontsize">Otras:</span><br>{{$student->CSOtrasEnfermedades}}</td>
            <td><span class="fontsize">Visual:</span><br>{{$student->CSVisual}}</td>
            <td><span class="fontsize">Auditivo:</span><br>{{$student->CSAuditivo}}</td>
            <td><span class="fontsize">Verbal:</span><br>{{$student->CSVerbal}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> INFORMACION ADICIONAL DEL ESTUDIANTE </b></td>
          </tr>
          <tr>
            <td colspan="3"><span class="fontsize">Informe Psicopedagogico:</span><br>{{$student->IAInformePsicopedagogico}}</td>
            <td colspan="2"><span class="fontsize">Actividades Extracatedra:</span><br>{{$student->IAActividadExtracatedra}}</td>
          </tr>
          <tr>
            <td colspan="5"><span class="fontsize">Talentos Artisticos:</span><br>{{$student->IATalentos}}</td>
          </tr>
          <tr>
            <td colspan="2"><span class="fontsize">Participara en Grupo de Interes:</span><br>{{$student->IAGrupoInteres}}</td>
            <td colspan="3"><span class="fontsize">Indique:</span><br>{{$student->IAGrupoInteresDescripcion}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> CONVIVENCIA FAMILIAR </b></td>
          </tr>
          <tr>
            <td><span>Parentesco:</span></td>
            <td><span>Nombre y Apellido:</span></td>
            <td><span>C.I:</span></td>
            <td><span>Ocupacion:</span></td>
            <td><span>Telefono:</span></td>
          </tr>
          <tr>
            <td>{{$student->DPNombres}}</td>
            <td>{{$student->DPNombres}}</td>
            <td>{{$student->DPNombres}}</td>
            <td>{{$student->DPNombres}}</td>
            <td>{{$student->DPNombres}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> DATOS DEL REPRESENTANTE LEGAL </b></td>
          </tr>
          <tr>
            <td colspan="3"><span class="fontsize">Indique:</span><br>{{$represent->DRNombres}}</td>
            <td><span class="fontsize">C.I:</span><br>{{$represent->DRApellidos}}</td>
            <td><span class="fontsize">Profesion:</span><br>{{$represent->DRProfesion}}</td>
          </tr>
          <tr>
            <td colspan="2"><span class="fontsize">Destrezas:</span><br>{{$represent->DRDestrezas}}</td>
            <td colspan="3"><span class="fontsize">Correo Electronico:</span><br>{{$represent->DRCorreoElectronico}}</td>
          </tr>
          <tr>
            <td colspan="4"><span class="fontsize">Direccion de Habitacion:</span><br>{{$represent->DRDireccionHabitacion}}</td>
            <td><span class="fontsize">Telefono:</span><br>{{$represent->DRTelefonoHabitacion}}</td>
          </tr>
          <tr>
            <td colspan="4"><span class="fontsize">Direccion de Trabajo:</span><br>{{$represent->DRDireccionTrabajo}}</td>
            <td><span class="fontsize">Telefono:</span><br>{{$represent->DRTelefonoTrabajo}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> PROBLEMAS DE INDOLE FAMILIAR </b></td>
          </tr>
          <tr>
            <td><span class="fontsize">Violencia Familiar:</span><br>{{$student->PFViolenciaFamiliar}}</td>
            <td><span class="fontsize">Desempleo:</span><br>{{$student->PFDesempleo}}</td>
            <td><span class="fontsize">Falta de Ingreso:</span><br>{{$student->PFFaltaIngreso}}</td>
            <td><span class="fontsize">Adicciones:</span><br>{{$student->PFAdicciones}}</td>
            <td><span class="fontsize">Enfermedades:</span><br>{{$student->PFEnfermedades}}</td>
          </tr>
          <tr>
            <td colspan="5"><span class="fontsize">Observaciones:</span><br>{{$student->PFObservaciones}}</td>
          </tr>
          <tr align="center">
            <td colspan="5"><b> DATOS DE LA VIVIENDA </b></td>
          </tr>
          <tr>
            <td><span class="fontsize">Tipo:</span><br>{{$student->DVTipoVivienda}}</td>
            <td><span class="fontsize">No. Dormitorios:</span><br>{{$student->DVDormitorios}}</td>
            <td><span class="fontsize">Condicion:</span><br>{{$student->DVCondicion}}</td>
            <td><span class="fontsize">Tenencia:</span><br>{{$student->DVTenencia}}</td>
            <td><span class="fontsize">Observacion:</span><br>{{$student->DVObservacion}}</td>
          </tr>          
        </tbody>
      </table>
      <br>
      <br>
      <table width="100%" border="1">
        <tbody>
          
          <tr>
            <td colspan="5"><b> Fecha de la Inscripcion:</b>{{$student->DPNombres}}</td>
          </tr>
          <tr>
            <td colspan="2"><br><br><br><br></td>
            <td colspan="2"><br><br><br><br></td>
            <td><br><br><br><br></td>
          </tr>
          <tr>
            <td colspan="2"><b> Representante:</b>{{$student->DRNombres}} {{$student->DRApellidos}}</td>
            <td colspan="2"><b> Estudiante:</b>{{$student->DPNombres}} {{$student->DPApellidos}}</td>
            <td><b>Profesor:</b>{{$student->DPNombres}} {{$student->DPAPellidos}}</td>
          </tr>
        </tbody>
      </table>
      <p>Nota: Los datos sumnistrados en el llenado de esta ficha, hacen constar que son fieles y excatos, de no ser asì, la Instituciòn
      </p>
    </div>
  </div>
  </div>
</body>

</html>