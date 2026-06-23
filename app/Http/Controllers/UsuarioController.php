<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'senha' => 'required|string|min:6'
       ]);

       Usuario::create([
        'nome' => $data['nome'],
        'email' => $data['email'],
        'senha' => Hash::make($data['senha'])
    ]);
       
        return redirect()
        ->route('usuarios.index')
        ->with('sucess','O Usuario foi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

       $data = $request->validate([
            'nome' => 'required|string|max:255',

            'email' => 'required|email|unique:usuarios,email,'.$usuario->id,

            'senha' => 'nullable|min:6'
        ]);

        $usuario->nome = $data['nome'];
        $usuario->email=$data['email'];
        
        if($request->filled('senha')){
            $usuario->senha = Hash::make($data['senha']);
        }


        $usuario->save();


        return redirect()
            ->route('usuarios.index')
            ->with('success','Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();


        return redirect()
            ->route('usuarios.index')
            ->with('success','Usuário removido com sucesso!');
    }

}