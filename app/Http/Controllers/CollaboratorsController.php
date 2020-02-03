<?php

namespace App\Http\Controllers;

use App\Collaborators;
use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
            return view('colaboradores.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
            return view('colaboradores.create');
        
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
     * @param  \App\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborators $collaborators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborators $collaborators)
    {
        //
        return view('colaboradores.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborators $collaborators)
    {
        // con esto se almacena tolo que se envia al metodo storage
           $datosCollaborator=request()->all();
        //no retornará una vista , será una respuesta:   
           return response()->json($datosCollaborator);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborators $collaborators)
    {
        //
    }
}
