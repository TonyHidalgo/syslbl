<?php

namespace App\Http\Controllers;

use App\Represent;
use Illuminate\Http\Request;

class RepresentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Represent  $represent
     * @return \Illuminate\Http\Response
     */
    public function show(Represent $represent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Represent  $represent
     * @return \Illuminate\Http\Response
     */
    public function edit(Represent $represent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Represent  $represent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Represent $represent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Represent  $represent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Represent $represent)
    {
        $represent->delete();
        return redirect()->route('estudiantes.index')->with('alert', 'Representante ha sido eliminado con exito.');
    }
}
