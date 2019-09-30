<?php

namespace Nombre_clase\Http\Controllers;

use Nombre_clase\re_tiquet;
use Illuminate\Http\Request;

class Programa_prueba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenar = re_tiquet::all();
        return view('prub.index',compact('almacenar'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('prub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $almacenar = new re_tiquet();
        $almacenar->titulo = $request->input('titulo');
        $almacenar->descripcion = $request->input('descripcion');
        $almacenar->categoria = $request->input('categoria');
        $almacenar->save();
        return ('guardado');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $m_tiqet = re_tiquet::find($id);
        return view('prub.show',compact('m_tiqet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $m_tiqet = re_tiquet::find($id);
        return view('prub.edit',compact('m_tiqet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $m_tiqet = re_tiquet::findOrFail($id);
        $m_tiqet->update($request->all());
        return redirect("/direc_res");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m_tiqet = re_tiquet::findOrFail($id);
        $m_tiqet->delete();
        return redirect("/direc_res");
    }
}
