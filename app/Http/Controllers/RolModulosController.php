<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\Modulo;

class RolModulosController extends Controller
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
    public function create($id)
    {
        $rol = Rol::find($id);
        $modulos = Modulo::all();

        return view('layouts.rol.modulos',compact('rol', 'modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolId = $request->rolId;
        $rol = Rol::find($rolId);
        $moduloId = $request->moduloId;
        $modulo = Modulo::find($moduloId);

        $rol->modulos()->attach($modulo->id);

        return Redirect('/rol')->with('message','Guardado Satisfactoriamente !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::find($id);

        return view('layouts.rol.detail',compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idR, $idM)
    {
        $rol = Rol::find($idR);
        $modulo = Modulo::find($idM);

        $rol->modulos()->detach($modulo->id);
        
        return Redirect('/rol')->with('message','Guardado Satisfactoriamente !');
    }
}
