<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;

class CadastroController extends Controller
    {
        public function cadastrar()
        {
            return view('cadastro');
        }
        
        public function cadastro(Request $request): RedirectResponse
        {

            $novoUsuario = User::create([
                'name' => $request->input('nome'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'data_de_nascimento' => $request->input('data_de_nascimento'),
                'sexo' => $request->input('sexo'),
            ]);
    
            if ($novoUsuario) {
                $request->session()->flash('success', 'Perfil cadastrado com sucesso!');
                return redirect()->route('login');
            } else {
                $request->session()->flash('error', 'Ocorreu um erro ao cadastrar o perfil.');
            }
    
            return back();
        }
}
