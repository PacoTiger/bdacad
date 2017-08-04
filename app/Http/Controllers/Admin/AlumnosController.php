<?php

namespace App\Http\Controllers\Admin;

use App\Alumno;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAlumnosRequest;
use App\Http\Requests\EditAlumnosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alumnos = Alumno::nombre($request->get('nombre'))->paginate();

        return view('admin.alumnos.index', compact('alumnos', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAlumnosRequest $request)
    {
        $alumno = new Alumno($request->all());
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('admin.alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('admin.alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(EditAlumnosRequest $request, Alumno $alumno)
    {
        $alumno->fill($request->all());
        $alumno->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        Session::flash('mensaje', 'El Alumno ' . $alumno->nombre . ' ' . $alumno->apellidos . ' ha sido eliminado');
        return redirect()->route('alumnos.index');
    }
}
