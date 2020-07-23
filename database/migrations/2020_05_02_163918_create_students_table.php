<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            /******************* INICIO PARTE 1 *************************/
            // DATOS PERSONALES
            $table->string('DPApellidos');
            $table->string('DPNombres');
            $table->integer('DPEdad')->nullable();
            $table->string('DPCedula');
            $table->longText('DPDireccion')->nullable();
            $table->string('DPTelefonoFijo')->nullable();
            $table->string('DPTelefonoCelular')->nullable();
            $table->string('DPCorreoElectronico')->nullable();
            $table->string('DPFoto');
            $table->string('DPAnio');
            $table->string('DPSeccion')->nullable();
            $table->string('DPGenero')->nullable();

            //DATOS DE NACIMIENTO
            $table->date('DNFechaNacimiento')->nullable();
            $table->string('DNNacionalidad')->nullable();
            $table->string('DNPais')->nullable();
            $table->string('DNLugarNacimiento')->nullable();
            $table->string('DNEstado')->nullable();
            $table->string('DNMunicipio')->nullable();
            $table->string('DNParroquia')->nullable();
            /******************* FIN PARTE 1 *************************/


            /******************* INICIO PARTE 2 *************************/
            //DATOS REPRESENTANTE
            $table->bigInteger('represent_id')->unsigned();

            //PROBLEMAS FAMILIARES
            $table->string('PFViolenciaFamiliar')->nullable();
            $table->string('PFDesempleo')->nullable();
            $table->string('PFFaltaIngreso')->nullable();
            $table->string('PFAdicciones')->nullable();
            $table->string('PFEnfermedades')->nullable();
            $table->string('PFOtros')->nullable();
            $table->string('PFObservaciones')->nullable();

            //DATOS VIVIENDA
            $table->string('DVTipoVivienda')->nullable();
            $table->integer('DVDormitorios')->nullable();
            $table->string('DVCondiciones')->nullable();
            $table->string('DVTenencia')->nullable();
            /******************* FIN PARTE 2 *************************/


            /******************* INICIO PARTE 3 *************************/
            //DATOS ACADEMICOS
            $table->string('DANuevoIngreso')->nullable();
            $table->string('DARegular')->nullable();
            $table->string('DARepitiente')->nullable();
            $table->string('DAMateriaPendiente')->nullable();
            $table->string('DATransferencia')->nullable();
            $table->string('DAEquivalencia')->nullable();
            $table->string('DAEstudioOtroPais')->nullable();
            $table->string('DAEstudioOtroPlantel')->nullable();
            $table->string('DAPlantelProcedencia')->nullable();
            $table->string('DAMateriasPendientes')->nullable();

            //INFORMACION ADICIONAL
            $table->string('IAInformePsicopedagogico')->nullable();
            $table->string('IAActividadExtracatedra')->nullable();
            $table->string('IATalentos')->nullable();
            $table->string('IAGrupoInteres')->nullable();
            $table->string('IAGrupoInteresDescripcion')->nullable();
            /******************* FIN PARTE 3 *************************/


            /******************* INICIO PARTE 4 *************************/
            //DATOS DE SALUD
            $table->string('CSTipoSangre')->nullable();
            $table->string('CSEnfermedades')->nullable();
            $table->string('CSMedicacion')->nullable();
            $table->string('CSMedicacionDescripcion')->nullable();
            $table->string('CSOtrasEnfermedades')->nullable();
            $table->string('CSVisual')->nullable();
            $table->string('CSAuditivo')->nullable();
            $table->string('CSVerbal')->nullable();

            /******************* FIN PARTE 4 *************************/

            //BANDERAS
            $table->boolean('Inscripcion')->nullable();


            //FECHA REGISTRO
            $table->timestamps();

            //$table->foreign('represent_id')->references('id')->on('represents');

        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
