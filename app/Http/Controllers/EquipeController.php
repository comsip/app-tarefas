<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    // Exibe a lista de equipes
    public function index()
    {
        $equipes = Equipe::all();

        return view('equipes.index', compact('equipes'));
    }

    // Exibe o formulário de criação
    public function create()
    {
        return view('equipes.create');
    }

    // Salva uma nova equipe
    public function store(Request $request)
    {
        $data = $request->validate([

            'nome' => 'required|string|max:255',


        ]);

        Equipe::create($data);

        return redirect()
            ->route('equipes.index')
            ->with('success', 'Equipe cadastrada com sucesso!');
    }

    // Exibe uma equipe específica
    public function show($id)
    {
        $equipe = Equipe::findOrFail($id);

        return view('equipes.show', compact('equipe'));
    }

    // Exibe formulário de edição
    public function edit($id)
    {
        $equipe = Equipe::findOrFail($id);

        return view('equipes.edit', compact('equipe'));
    }

    // Atualiza equipe
    public function update(Request $request, $id)
    {
        $equipe = Equipe::findOrFail($id);

        $data = $request->validate([

            'nome' => 'required|string|max:255',

        ]);

        $equipe->update($data);

        return redirect()
            ->route('equipes.index')
            ->with('success', 'Equipe atualizada com sucesso!');
    }

    // Remove equipe
    public function destroy($id)
    {
        $equipe = Equipe::findOrFail($id);

        $equipe->delete();

        return redirect()
            ->route('equipes.index')
            ->with('success', 'Equipe removida com sucesso!');
    }
}