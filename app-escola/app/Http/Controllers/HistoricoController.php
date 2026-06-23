<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicos = Historico::all();
        return view('historico.index', ['historicos' => $historicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Historico::create($request->all());
        return redirect()->route('historicos.index');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function show(Historico $historico)
    {
     return view('historico.show', compact('historico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function edit(Historico $historico)
    {
        return view('historico.edit', compact('historico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historico $historico)
    {
        $historico->update($request->all());
        return redirect()->route('historicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historico $historico)
    {
        $historico->delete();
        return redirect()->route('historicos.index');
    }
}
