<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CargasAgrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:3000/cargas_enviar/');
        $agcargas = $response->json();
        //dd($cargasagr[0]);
        return view('Cargas.CargasAgr.index')->with('agcargas', $agcargas[0]);
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
        $response = Http::post('http://localhost:3000/cargas_enviar/insertar_cargas_enviar/', [
            'PD_Kg_Carga_Enviar'=>$request->peso_carga_agreg,
            'PV_des_Carga_Enviar'=>$request->descripcion,
            'PI_can_Carga_Enviar'=>$request->cantidad,
            'PI_cod_Carga_Futura'=>$request->fecha_carga_enviar,
            //'PV_cenv_usr_adicion'=>Auth()->user()->username,
            //'PV_cenv_usr_modifico'=>Auth()->user()->username,
            
        ]);
        dd($request, $response->json(),$request->cod_usuario); 
        
        //return redirect('/agcargas');
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
