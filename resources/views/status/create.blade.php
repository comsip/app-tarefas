@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Status</h1>
    <form action="{{ route('status.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection