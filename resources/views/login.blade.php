
@extends('layout.basic')
@section('titulo', 'Login')
@section('link', route('cadastro'))
@section('nome', 'cadastrar')
 @section('content')
 <title>Cadastro</title>
 <link href="{{ asset('css/cadastro.css') }}" rel="stylesheet">
 <div class="header-back">
    <img src="{{ asset('img/background/global.webp') }}" alt="mapa">
</div>
<div class="container-form">
    <h1>Entrar</h1>
    <form class="form" action="{{ route('login.attempt') }}" method="POST">
        @csrf
        <div class="form-grupo">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-input" id="email" placeholder="seuemail@email.com" required>
        </div>
        <div class="form-grupo">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-input" id="password" placeholder="Senha" required>
        </div>
        <div class="submit">
            <button type="submit" class="submit-btn" style="left: 36%;">Enviar</button>
        </div>
    </form>
</div><!--container_form-->
 @endsection