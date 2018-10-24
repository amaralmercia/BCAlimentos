<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimento = Alimento::all();
        return view('/alimento', compact('alimento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Tipo::all();
        return view('criar-alimento', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alimento = new Alimento();
        $alimento->nome = $request->input('nomeAlimento');
        $alimento->tipo_alimento = $request->input('tipoAlimento');
        $alimento->data_fabricacao = $request->input('dtFab');
        $alimento->data_validade = $request->input('dtVal');
        $alimento->id_tipo = $request->input('catAlimento');
        $alimento->save();
        return redirect('/alimento');


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
        $alimento = Alimento::find($id);
        return view('editar-alimento', compact('alimento'));
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
        
        $alimento = Alimento::find($id);
        $alimento->nome = $request->input('nomeAlimento');
        $alimento->save();
        return redirect('/alimento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alimento = Alimento::find($id);
        $alimento->delete();
        return redirect('/alimento'); 
    }
    
}
