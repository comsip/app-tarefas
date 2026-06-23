<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
 
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('relatorio.index', compact('relatorios'));
    }

    public function create()
    {
        return view('relatorio.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'data_geracao' => 'required|date',
        ]);

        Relatorio::create($data);
        return redirect()->route('relatorio.index')
                        ->with('success', 'Relatório criado com sucesso!');
    }

    
    public function show(Relatorio $relatorios)
    {
        return view('relatorio.show', compact('relatorios'));
    }

   
    public function edit(Relatorio $relatorios)
    {
        return view('relatorio.edit', compact('relatorios'));
    }

    public function update(Request $request, Relatorio $relatorio)
    {
        $data = $request->validate([
            'tipo' => 'required|string|max:255',
            'periodo' => 'required|string|max:255',
            'data_geracao' => 'required|date',
        ]);

        $relatorio->update($data);

        return redirect()->route('relatorio.index')
                        ->with('success', 'Relatório atualizado com sucesso!');
    }

    
    public function destroy(Relatorio $relatorio)
    {

        $relatorio->delete();
        return redirect()->route('relatorio.index')
                        ->with('success', 'Relatório excluído com sucesso!');
    }
}
