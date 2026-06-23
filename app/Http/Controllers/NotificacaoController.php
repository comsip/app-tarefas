<?php

namespace App\Http\Controllers;

use App\Models\Notificacao;
use Illuminate\Http\Request;

class NotificacaoController extends Controller
{
    public function index()
    {
        $notificacoes = Notificacao::all();

        return view('notificacao.index', compact('notificacoes'));
    }

    public function show($id)
    {
        $notificacao = Notificacao::findOrFail($id);

        return view('notificacao.show', compact('notificacao'));
    }

    public function marcarComoLida($id)
{
    $notificacao = Notificacao::findOrFail($id);

    $notificacao->lida = 1;

    $notificacao->save();

    return response()->json([
        'success' => true
    ]);
}
}