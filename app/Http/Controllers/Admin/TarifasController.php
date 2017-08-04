<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTarifasRequest;
use App\Http\Requests\EditTarifasRequest;
use App\Tarifa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = Tarifa::paginate();

        return view('admin.tarifas.index', compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tarifas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTarifasRequest $request)
    {
        $tarifa = new Tarifa($request->all());
        $tarifa->save();
        return redirect()->route('tarifas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarifa  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function show(Tarifa $tarifas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarifa  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarifa $tarifa)
    {
        return view('admin.tarifas.edit', compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarifa  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function update(EditTarifasRequest $request, Tarifa $tarifa)
    {
        $tarifa->fill($request->all());
        $tarifa->save();
        return redirect()->route('tarifas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarifa  $tarifas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();
        Session::flash('mensaje', 'La tarifa ha sido eliminada');
        return redirect()->route('tarifas.index');
    }
}
