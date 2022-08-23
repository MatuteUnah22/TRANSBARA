<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\NullOutput;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/usuarios/');
        $usuarios = $response->json();
        //dd($usuarios[0]);
        return view('Personas.Usuario.index')->with('usuarios', $usuarios[0]);

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
        $response = Http::post('http://localhost:3000/usuarios/insertar_usuario/', [
            'PV_usr_cod_usuario'=>$request->cod_usuario,
            'PV_usr_password'=>$request->password,
            'PV_usr_nom_usuario'=>$request->nombre_usuario,
            'PI_usr_cod_estatus'=>$request->cod_estatus,
            'PV_usr_loguead'=>'s',
            'PI_usr_cod_tipo_usuario'=>$request->cod_tipo_user,
            'PV_usr_usr_adicion'=>Auth()->user()->username,
            'PV_usr_usr_modificacion'=>Auth()->user()->username,
        ]);
        //dd($request, $response->json(),$request->cod_usuario);

        return redirect('/usuarios');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
