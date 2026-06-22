@extends('layouts.app')

@section('title','Novo Usuario')

@section('content')

<div class="card p-4">

<h4>Cadastrar Novo Usuario</h4>


<form action="{{ route('usuarios.store') }}" method="POST">

@csrf


<div class="mb-3">

<label>Nome completo</label>

<input type="text"
name="nome"
class="form-control">

</div>


<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control">

</div>


<div class="mb-3">

<label>Senha</label>

<input type="password"
name="senha"
class="form-control">

</div>

<button class="btn btn-primary">
Salvar
</button>


<a href="{{ route('usuarios.index') }}"
class="btn btn-secondary">
Cancelar
</a>


</form>

</div>

@endsection