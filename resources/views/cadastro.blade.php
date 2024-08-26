
@extends('layout.basic')
@section('titulo', 'cadastrar')
@section('nome', 'Login')
@section('link', route('login'))
@section('content')
 <title>Cadastro</title>
 <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet">
 <div class="header-back">
    <img src="{{ asset('img/background/global.webp') }}" alt="mapa">
</div>
<div class="container-form">
    <h1>Iniciar Sessão</h1>
    <form class="form" action="{{ route('form.cadastro') }}" method="POST">
        @csrf
        <div class="form-grupo">
            <label for="nome" class="form_label">Nome</label>
            <input type="text" name="nome" class="form-input" id="nome" placeholder="Nome" required>
        </div>
        
        <div class="form-grupo">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-input" id="email" placeholder="seuemail@email.com" required>
        </div>
        
        <div class="form-grupo">
            <label for="datanascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_de_nascimento" class="form-input" id="datanascimento" placeholder="Data de Nascimento" required>
        </div>        
        
        <div class="form-grupo">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-input" id="password" placeholder="Senha" required>
        </div>
    
        <div class="form-grupo">
            <span class="legenda">Sexo:</span>
            
            <div class="radio-btn">
                <input type="radio" class="form-new-input" id="masculino" name="sexo" value="Masculino" required>
                <label for="masculino" class="radio-label form-label"> <span class="radio-new-btn"></span> Masculino</label>
            </div>
            <div class="radio-btn">
                <input type="radio" class="form-new-input" id="feminino" name="sexo" value="Feminino" required>
                <label for="feminino" class="radio-label form-label"> <span class="radio-new-btn"></span> Feminino</label>
            </div>
        </div>
        
        <div class="submit">
            <a href="{{ ('login') }}"><button type="submit" class="submit-btn">Cadastrar</button><a>
        </div>
    </form>
</div><!--container_form-->
 @endsection