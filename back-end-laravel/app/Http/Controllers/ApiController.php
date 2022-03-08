<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    //
    public function criandoUsuario(Request $request){
        $array =[ 'error' => ''];
        
        $rules =[
            'nome_todo' => 'required|min:6',
            'senha' => 'required|min:6',
            'email' => 'required|min:6',
            'telefone' => 'required|min:6',
            'foto_perfil' => 'required|min:6',
            'data_nascimento' => 'required|min:6',
            'endereco' => 'required|min:6',
            'ativado' => 'required|min:1',
            
        ];

        $validacao = Validator::make($request->all(), $rules);

        if($validacao->fails())
        {
            $array['error'] = $validacao->messages();
            return $array;
        }

        $nome = $request->input('nome_todo');
        $senha = $request->input('senha');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $foto_perfil = $request->input('foto_perfil');
        $endereco = $request->input('endereco');
        $ativado = $request->input('ativado');
        $data_nascimento = $request->input('data_nascimento');


        $usua = new Usuario();
        $usua->nome = $nome;
        $usua->senha = $senha;
        $usua->email = $email;
        $usua->telefone = $telefone;
        $usua->foto_perfil = $foto_perfil;
        $usua->endereco = $endereco;
        $usua->ativado = $ativado;
        $usua->data_nascimento = $data_nascimento;
        $usua->save();
     
        return json_encode($nome);
    }

    
}
