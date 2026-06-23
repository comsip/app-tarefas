<?php

namespace App\Http\Controllers;

use App\Models\relatorio;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('relatorios.index', compact('relatorios'));
    }

    public function create()
    {
        return view('relatorios.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'periodo' => 'nullable|string',
            'data_geracao' => 'required|date',
        ]);

        Relatorio::create($data);

        return redirect()->route('relatorios.index')->with('success', 'Relatório criado com sucesso!');
    }

    public function show($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios.show', compact('relatorio'));
    }

    public function edit($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios.edit', compact('relatorio'));
    }

    public function update(Request $request, $id)
    {
        $relatorio = Relatorio::findOrFail($id);

        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'periodo' => 'nullable|string',
            'data_geracao' => 'required|date',
                
        ]);

        $relatorio->update($data);

        return redirect()->route('relatorios.index')->with('success', 'Relatório atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        $relatorio->delete();

        return redirect()->route('relatorios.index')->with('success', 'Relatório  removido com sucesso!');
    }
}