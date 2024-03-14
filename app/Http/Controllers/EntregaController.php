<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;
use App\Models\Asignatura;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
{
    // Obtener la asignatura
    $asignatura = Asignatura::findOrFail($id);

    // Obtener las entregas asociadas a la asignatura
    $entregas = $asignatura->entregas;

    // Pasar las entregas y la asignatura a la vista
    return view('entregas.index', compact('entregas', 'asignatura'));
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
     * @param  \App\Models\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Obtener la entrega por su ID
        $entrega = Entrega::findOrFail($id);

        // Devolver la vista 'entregas.show' con los datos de la entrega
        return view('entregas.show', ['entrega' => $entrega]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrega $entrega)
    {
        //
    }


    public function entregasPorAsignatura($asignaturaId)
    {
        // Obtener la asignatura específica junto con sus entregas asociadas
        $asignatura = Asignatura::with('entregas')->findOrFail($asignaturaId);
    
        // Pasar las entregas asociadas a la vista
        return view('entregas.index', ['entregas' => $asignatura->entregas]);
    }

}
