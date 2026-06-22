<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    // Exibe a lista de projetos
    public function index()
    {
        $projetos = Projeto::all();
        return view('projetos.index', compact('projetos'));
    }

    // Exibe o formulário de criação
    public function create()
    {
        return view('projetos.create');
    }

    // Salva um novo projeto
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            
        ]);

        Projeto::create($data);

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto cadastrado com sucesso!');
    }

    // Exibe um projeto específico
    public function show($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('projetos.show', compact('projeto'));
    }

    // Exibe o formulário de edição
    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('projetos.edit', compact('projeto'));
    }

    // Atualiza um projeto
    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:999',
           
        ]);

        $projeto->update($data);

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto atualizado com sucesso!');
    }

    // Remove um projeto
    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto removido com sucesso!');
    }
}