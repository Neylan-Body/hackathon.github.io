<?php

namespace App\Http\Controllers;

use App\inscrito;
use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Inscricao.index');
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
     * @param  \App\inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function show(inscrito $inscrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function edit(inscrito $inscrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inscrito $inscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inscrito  $inscrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscrito $inscrito)
    {
        //
    }
}
