@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Status</h1>
    <p><strong>ID:</strong> {{ $status->id_status }}</p>
    <p><strong>Nome:</strong> {{ $status->nome }}</p>
    <a href="{{ route('status.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
