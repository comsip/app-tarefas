<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // Exibe a lista de comentarios 
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentarios.index', compact('comentarios'));
    }

    // Exibe o formulário de criação de um novo comentario
    public function create()
    {
        return view('comentarios.create');
    }

    // Salva os dados de um novo comentario no banco de dados
    public function store(Request $request)
    {
        $data = $request->validate([
            'texto' => 'required|string',
            'data_hora' => 'nullable|date',
        ]);

        Comentario::create($data);

        return redirect()->route('comentarios.index')->with('success', 'Comentario cadastrado com sucesso!');
    }

    // Exibe os dados de um comentario específico
    public function show($id)
    {
        $comentario = Comentario::findOrFail($id);
        return view('comentarios.show', compact('comentario'));
    }

    // Exibe o formulário de edição de um comentario 
    public function edit($id)
    {
        $comentario = Comentario::findOrFail($id);
        return view('comentarios.edit', compact('comentario'));
    }

    // Atualiza os dados do comentario no banco de dados
    public function update(Request $request, $id)
    {
        $comentario = Comentario::findOrFail($id);

        $data = $request->validate([
            'texto' => 'required|string',
            'data_hora' => 'nullable|date',
        ]);

        $comentario->update($data);

        return redirect()->route('comentarios.index')->with('success', 'Comentario atualizado com sucesso!');
    }

    // Remove o comentario do banco de dados
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();

        return redirect()->route('comentarios.index')->with('success', 'Comentario removido com sucesso!');
    }
}