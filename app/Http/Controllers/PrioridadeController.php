<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prioridade;

class PrioridadeController extends Controller
{
    public function index()
    {
        $prioridades = Prioridade::all();
        ;
        return view('prioridades.index', compact('prioridades'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nivel' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);
        $prioridade = Prioridade::create($request->only(['nivel', 'descricao']));
        //return response()->json($prioridade, 201);
        return redirect()->back()->with('success', 'Priorida de criada com sucesso!');

   //update, delete, show
    }

    public function update(Request $request, $id)
    {
        $prioridade = Prioridade::findOrFail($id);
        $request->validate([
            'nivel' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);
        $prioridade->update($request->only(['nivel', 'descricao']));
        return redirect()->back()->with('success', 'Priorida de atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $prioridade = Prioridade::findOrFail($id);
        $prioridade->delete();
        return redirect()->back()->with('success', 'Priorida de deletada com sucesso!');
    }

    public function show($id)
    {
        $prioridade = Prioridade::findOrFail($id);
        return view('prioridades.show', compact('prioridade'));
    }
    public function edit($id)
    {
        $prioridade = Prioridade::findOrFail($id);
        return view('prioridades.edit', compact('prioridade'));
    }

}
