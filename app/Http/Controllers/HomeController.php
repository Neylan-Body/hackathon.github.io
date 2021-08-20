<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Edital;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tela_editais(Request $request)
    {
        $editais = Edital::orderBy('id', 'DESC')->paginate(Edital::count('id'));
        return view('TelaInicial.tela_editais', compact('editais'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function tela_consultar_inscricao()
    {
        return view('TelaInicial.tela_consultar_inscricao');
    }
    public function tela_consultar_matricula()
    {
        return view('TelaInicial.tela_consultar_matricula');
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
