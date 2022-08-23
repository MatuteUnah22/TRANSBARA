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
            'cod_usuario'=>"18",//$request->cod_usuario,
            'password'=>"futbol24",//$request->password,
            'nom_usuario'=>"Daniela",//$request->nombre_usuario,
            'cod_estatus'=>1,//$request->cod_estatus,
            'loguead'=>"s",//'s',
            'cod_tipo_usuario'=>1,//$request->cod_tipo_user,
            'usr_adicion'=>"sss",//Auth()->user()->username,
            'usr_modificacion'=>"Gabriela",//Null,
        ]);
        dd($request, $response->json());
        
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
