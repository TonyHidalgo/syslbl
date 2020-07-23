<?php

namespace App\Http\Controllers;

use App\Student;
use App\Represent;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate();
        $represents = Represent::paginate();
        return view('estudiantes.index', compact('students', 'represents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $represent = Represent::all();
        return view('estudiantes.create', compact('represent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if (!Student::where('DPCedula', '=', $request->input('DPCedula'))->exists()) {
            $student = new Student;

            $student->DPApellidos = $request->input('DPApellidos'); //
            $student->DPNombres = $request->input('DPNombres'); //
            $student->DPCedula = $request->input('DPCedula'); //
            $student->DPAnio = $request->input('DPAnio'); //
            $student->DPFoto = 'NO_IMAGEN.jpg';

            //DATOS REPRESENTANTE
            $student->represent_id = 0;


            $student->inscripcion = false;

            $student->save();

            $ci = $request->input('DRCedula');
            $represent = Represent::where('DRCedula', $ci)->first();


            if (empty($represent)) {
                $represent = new Represent;
                $represent->DRApellidos = $request->input('DRApellidos'); //
                $represent->DRNombres = $request->input('DRNombres'); //
                $represent->DRCedula = $request->input('DRCedula'); //
                $represent->DRProfesion = '';
                $represent->DRDestrezas = '';
                $represent->DRCorreoElectronico = '';
                $represent->DRDireccionTrabajo = '';
                $represent->DRTelefonoTrabajo = '';
                $represent->DRDireccionHabitacion = '';
                $represent->DRTelefonoHabitacion = '';
                $represent->DRFoto = 'NO_IMAGEN.jpg';

                $represent->save();

                $student->represent_id = $represent->id;

                $student->save();
            } else {
                $student->represent_id = $represent->id;
                $student->save();
            }


            return redirect()->route('estudiantes.index')->with('alert', 'Estudiante registrado con exito.');
        }


        return redirect()->route('estudiantes.index')->with('alert', 'Estudiante ya registrado.');
        //return $this->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscribir(Student $student)
    {
        return view('estudiantes.inscribir', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('estudiantes.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    public function lista_foto()
    {
        $students = Student::where('DPFoto', 'like', "NO_IMAGEN.jpg")->paginate(10);
        return view('estudiantes.lista_foto', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function tomar_foto(Request $request, Student $student) //LISTO
    {
        //$represent = $student->represent;

        if ($request->hasFile('imgEst')) {
            $fileEst = $request->file('imgEst');
            $name = $student->DPApellidos . $student->DPNombres . '.jpg';
            $path = public_path() . '\img\estudiantes';
            $request->file('imgEst')->move($path, $name);
            $student->DPFoto = $name;
        } else {
            $student->DPFoto = 'NO_IMAGEN.jpg';
        }
        if ($request->hasFile('imgRep')) {
            $fileRep = $request->file('imgRep');
            $name = $student->represent->DRApellidos . $student->represent->DRNombres . '.jpg';
            $path = public_path() . '\img\representantes';
            $request->file('imgRep')->move($path, $name);
            $student->represent->DRFoto = $name;
        } else {
            $student->represent->DRFoto = 'NO_IMAGEN.jpg';
        }

        $student->save();
        $student->represent->save();

        return $this->lista_foto();
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student) //LISTO
    {
        $student->delete();
        return redirect()->route('estudiantes.index')->with('alert', 'Estudiante ha sido eliminado con ex.');
    }



    public function ficha(Student $student)
    {

        $ci = $student->represent->DRCedula;
        $represent = Represent::where('DRCedula', $ci)->first();

        return PDF::loadView('estudiantes.ficha', compact('student', 'represent'))->setPaper('tabloid', 'portrait')->stream($student->DPCedula . '.pdf');
    }

    public function SHOWinscribePart1(Student $student)
    {
        return view('estudiantes.inscribir-1', compact('student'));
    }

    public function POSTinscribePart1(Student $student, Request $request)
    {
        /******************* INICIO PARTE 1 *************************/
        //dd($request->input('DPEdad'));
        // DATOS PERSONALES
        $student->DPApellidos = $request->input('DPApellidos');
        $student->DPNombres = $request->input('DPNombres');
        $student->DPEdad = $request->input('DPEdad'); // CALCULAR CON FECHA
        $student->DPCedula = $request->input('DPCedula');
        $student->DPDireccion = $request->input('DPDireccion');
        $student->DPTelefonoFijo = $request->input('DPTelefonoFijo');
        $student->DPTelefonoCelular = $request->input('DPTelefonoCelular');
        $student->DPCorreoElectronico = $request->input('DPCorreoElectronico');
        $student->DPSeccion = 'A'; // $request->input('DPSeccion');
        $student->DPGenero = 'M'; //$request->input('DPGenero');

        //DATOS DE NACIMIENTO
        $student->DNFechaNacimiento = $request->input('DNFechaNacimiento'); // TRANSFORMAR A FECHA
        $student->DNNacionalidad = $request->input('DNNacionalidad');
        $student->DNPais = $request->input('DNPais');
        $student->DNLugarNacimiento = $request->input('DNLugarNacimiento');
        $student->DNEstado = $request->input('DNEstado');
        $student->DNMunicipio = $request->input('DNMunicipio');
        $student->DNParroquia = $request->input('DNParroquia');

        /******************* FIN PARTE 1 *************************/
        $student->save();
        return redirect('/estudiantes/inscribir-2/'.$student->id);
    }

    public function SHOWinscribePart2(Student $student)
    {
        return view('estudiantes.inscribir-2', compact('student'));
    }

    public function POSTinscribePart2(Student $student, Request $request)
    {
        /******************* FIN PARTE 2 *************************/

        //DATOS REPRESENTANTE
        $ci = $student->represent->DRCedula;
        $represent = Represent::where('DRCedula', $ci)->first();

        $represent->DRProfesion = $request->input('DRProfesion');
        $represent->DRDestrezas = $request->input('DRDestrezas');
        $represent->DRCorreoElectronico = $request->input('DRCorreoElectronico');
        $represent->DRDireccionTrabajo = $request->input('DRDireccionTrabajo');
        $represent->DRTelefonoTrabajo = $request->input('DRTelefonoTrabajo');
        $represent->DRDireccionHabitacion = $request->input('DRDireccionHabitacion');
        $represent->DRTelefonoHabitacion = $request->input('DRTelefonoHabitacion');

        //PROBLEMAS FAMILIARES
        $student->PFViolenciaFamiliar = $request->input('PFViolenciaFamiliar');
        $student->PFDesempleo = $request->input('PFDesempleo');
        $student->PFFaltaIngreso = $request->input('PFFaltaIngreso');
        $student->PFAdicciones = $request->input('PFAdicciones');
        $student->PFEnfermedades = $request->input('PFEnfermedades');
        $student->PFOtros = $request->input('PFOtros');
        $student->PFObservaciones = $request->input('PFObservaciones');

        //DATOS VIVIENDA
        $student->DVTipoVivienda = $request->input('DVTipoVivienda');
        $student->DVDormitorios = $request->input('DVDormitorios');
        $student->DVCondiciones = $request->input('DVCondiciones');
        $student->DVTenencia = $request->input('DVTenencia');

        /******************* FIN PARTE 2 *************************/
        //dd($request);
        $student->save();
        $represent->save();

        return redirect('/estudiantes/inscribir-3/'.$student->id);
    }

    public function SHOWinscribePart3(Student $student)
    {
        return view('estudiantes.inscribir-3', compact('student'));
    }

    public function POSTinscribePart3(Student $student, Request $request)
    {
        /******************* INICIO PARTE 3 *************************/

        //DATOS ACADEMICOS
        $student->DANuevoIngreso = $request->input('DANuevoIngreso');
        $student->DARegular = $request->input('DARegular');
        $student->DARepitiente = $request->input('DARepitiente');
        $student->DAMateriaPendiente = $request->input('DAMateriaPendiente');
        $student->DATransferencia = $request->input('DATransferencia');
        $student->DAEquivalencia = $request->input('DAEquivalencia');
        $student->DAEstudioOtroPais = $request->input('DAEstudioOtroPais');
        $student->DAEstudioOtroPlantel = $request->input('DAEstudioOtroPlantel');
        $student->DAPlantelProcedencia = $request->input('DAPlantelProcedencia');
        $student->DAMateriasPendientes = $request->input('DAMateriasPendientes');

        //INFORMACION ADICIONAL
        $student->IAInformePsicopedagogico = $request->input('IAInformePsicopedagogico');
        $student->IAActividadExtracatedra = $request->input('IAActividadExtracatedra');
        $student->IATalentos = $request->input('IATalentos') . $request->input('IATalentosDescripcion');
        $student->IAGrupoInteres = $request->input('IAGrupoInteres');
        $student->IAGrupoInteresDescripcion = $request->input('IAGrupoInteresDescripcion');

        /******************* FIN PARTE 3 *************************/

        $student->save();

        return redirect('/estudiantes/inscribir-4/'.$student->id);
    }

    public function SHOWinscribePart4(Student $student)
    {
        return view('estudiantes.inscribir-4', compact('student'));
    }

    public function POSTinscribePart4(Student $student, Request $request)
    {
        /******************* INICIO PARTE 4 *************************/

        //DATOS DE SALUD
        $student->CSTipoSangre = $request->input('CSTipoSangre');
        $student->CSEnfermedades = $request->input('CSEnfermedades');
        $student->CSMedicacion = $request->input('CSMedicacion');
        $student->CSMedicacionDescripcion = $request->input('CSMedicacionDescripcion');
        $student->CSOtrasEnfermedades = $request->input('CSOtrasEnfermedades');
        $student->CSVisual = $request->input('CSVisual');
        $student->CSAuditivo = $request->input('CSAuditivo');
        $student->CSVerbal = $request->input('CSVerbal');

        /******************* FIN PARTE 4 *************************/
        //dd($request);
        $student->save();

        return redirect('/estudiantes/inscribir-5/'.$student->id);
    }

    public function SHOWinscribePart5(Student $student)
    {
        return view('estudiantes.inscribir-5', compact('student'));
    }

    public function  POSTinscribePart5(Request $request, Student $student)
    {
        $student->Inscripcion = 1;
        $student->save();
        return redirect('/estudiantes');
    }
}
