@extends('layouts.app')

@section('title','Editar Usuario')


@section('content')

<div class="card p-4">

<h4>Editar Usuario</h4>


<form action="{{ route('usuarios.update',$usuario->id) }}"
method="POST">


@csrf
@method('PUT')


<div class="mb-3">

<label>Nome</label>

<input type="text"
name="nome"
value="{{ $usuario->nome }}"
class="form-control">

</div>


<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
value="{{ $usuario->email }}"
class="form-control">

</div>


<div class="mb-3">

<label>Senha</label>

<input type="text"
name="telefone"
value="{{ $usuario->telefone }}"
class="form-control">

</div>


<button class="btn btn-success">
Atualizar
</button>


<a href="{{ route('usuarios.index') }}"
class="btn btn-secondary">
Cancelar
</a>


</form>


</div>


@endsection