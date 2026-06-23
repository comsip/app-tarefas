@extends('layouts.app')


@section('title','Detalhes do Usuario')


@section('content')

<div class="card p-4">


<h4>Detalhes do Usuario</h4>


<p>
<strong>Nome:</strong>
{{ $usuario->nome }}
</p>


<p>
<strong>Email:</strong>
{{ $usuario->email }}
</p>


<p>
<strong>Senha:</strong>
{{ $usuario->senha}}
</p>


<a href="{{ route('usuarios.index') }}"
class="btn btn-secondary">
Voltar
</a>


<a href="{{ route('usuarios.edit',$usuario->id) }}"
class="btn btn-primary">
Editar
</a>


</div>

@endsection