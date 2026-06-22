@extends('layouts.app')

@section('title','Lista de Usuarios')

@section('content')

<div class="card p-4">

<div class="d-flex justify-content-between mb-3">

<h4>Lista de Usuarios</h4>

<a href="{{ route('usuarios.create') }}" class="btn btn-success">
+ Novo Usuario
</a>

</div>


<table class="table table-striped">

<thead class="table-dark">
    
    <tr>
        
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Ações</th>
        
    </tr>
    
</thead>



<tbody>

@forelse($usuarios as $usuario)

<tr>

<td>{{ $usuario->nome }}</td>

<td>{{ $usuario->email }}</td>

<th>Ações</th>


<td>

<a href="{{ route('usuarios.show',$usuario->id) }}" 
class="btn btn-info btn-sm">
Ver
</a>


<a href="{{ route('usuarios.edit',$usuario->id) }}"
class="btn btn-warning btn-sm">
Editar
</a>


<form action="{{ route('usuarios.destroy',$usuario->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Excluir
</button>

</form>

</td>

</tr>


@empty

<tr>

<td colspan="5" class="text-center">
Nenhum usuario cadastrado.
</td>

</tr>

@endforelse


</tbody>

</table>

</div>

@endsection