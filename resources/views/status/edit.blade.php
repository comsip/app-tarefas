@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Status</h1>

    <form action="{{ route('status.update', $status->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text"
                   class="form-control"
                   id="nome"
                   name="nome"
                   value="{{ $status->nome }}"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
    </form>
</div>
@endsection
