@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <div class="mb-3">
        <a href="{{ route('produtos.index') }}" class="btn btn-sm btn-outline-secondary">← Voltar</a>
    </div>

    <div class="card p-4" style="background: white; padding: 20px; border-radius: 8px;">
        <h2 class="mb-4">📦 Novo Produto</h2>
        
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label fw-semibold">Nome do Produto *</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label fw-semibold">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="preco" class="form-label fw-semibold">Preço *</label>
                    <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quantidade" class="form-label fw-semibold">Quantidade *</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 mt-3" style="padding: 8px 15px; background: #28a745;">Salvar Produto</button>
        </form>
    </div>
</div>
@endsection