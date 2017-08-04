<?php

namespace App\Http\Controllers\Admin;

use App\Asignatura;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAsignaturasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AsignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $asignaturas = Asignatura::nombre($request->get('nombre'))->paginate();

        return view('admin.asignaturas.index', compact('asignaturas', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAsignaturasRequest $request)
    {
        $asignatura = new Asignatura($request->all());
        $asignatura->save();
        return redirect()->route('asignaturas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        return view('admin.asignaturas.edit', compact('asignatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        $asignatura->fill($request->all());
        $asignatura->save();
        return redirect()->route('asignaturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asignaturas  $asignaturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        Session::flash('mensaje', 'La asignatura ' . $asignatura->nombre . ' ha sido eliminada');
        return redirect()->route('asignaturas.index');
    }
}
