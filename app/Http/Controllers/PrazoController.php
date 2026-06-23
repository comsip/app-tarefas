<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prazo;

class PrazoController extends Controller
{
   public function index()
{
    $prazos = Prazo::all();

    return view('prazos.index', compact('prazos'));
}

    public function create()
    {
        return view('prazos.create');
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'data_limite' => 'required|date',
    ]);

    Prazo::create($data);

    return redirect()
        ->route('prazos.index')
        ->with('success', 'Prazo confirmado!');
}

    public function show(Prazo $prazo)
    {
        return view('prazos.show', compact('prazo'));
    }

    public function edit(Prazo $prazo)
    {
        return view('prazos.edit', compact('prazo'));
    }

 public function update(Request $request, Prazo $prazo)
{
    $data = $request->validate([
        'data_limite' => 'required|date',
    ]);

    $prazo->update($data);

    return redirect()
        ->route('prazos.index')
        ->with('success', 'Prazo atualizado com sucesso!');
}

public function destroy(Prazo $prazo)
{
    $prazo->delete();

    return redirect()
        ->route('prazos.index')
        ->with('success', 'Prazo removido!');
}
}