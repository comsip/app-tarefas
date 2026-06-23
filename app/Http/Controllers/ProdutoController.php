<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // 1. Tela principal: Mostra todos os produtos cadastrados
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    // 2. Tela de Cadastro: Abre o formulário para criar um produto
    public function create()
    {
        return view('produtos.create');
    }

    // 3. Ação de Salvar: Valida os dados digitados e envia para o banco
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
        ]);

        Produto::create($data);

        // Após salvar, volta para a lista com uma mensagem de sucesso
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }
}