<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GeneroModel;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = GeneroModel::all();
        foreach ($generos as $g) {

            echo $g->idCliente . " ";
            echo $g->nome . "<br />";
            echo $g->dtNasc . "<br />";
            echo $g->EstadoCivil . "<br />";
            echo $g->endereco . "<br />";
            echo $g->numero . "<br />";
            echo $g->complemento . "<br />";
            echo $g->CEP . "<br />";
            echo $g->cidade . "<br />";
            echo $g->estado . "<br />";
            echo $g->RG . "<br />";
            echo $g->CPF . "<br />";
            echo $g->email . "<br />";
            echo $g->fone . "<br />";
            echo $g->celular . "<br />";
        }
    }

    public function exibirGeneros()
    {
        $generos = GeneroModel::all();
        return view('generosView', compact('generos'));
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
