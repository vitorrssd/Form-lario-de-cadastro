@extends('layout.basic')
@section('titulo', 'Visão geral')
@section('link', route('login'))
@section('nome', 'Login')
@section('content')
<link href="{{ asset('css/sobre-nos.css') }}" rel="stylesheet">
{{-- style --}}
<div class="header-background">
    <img src="{{ asset('img/background/ufc5-hero.jpg') }}" alt="mapa">
</div>
<div>
<h3 class="info-text">Explore uma geração de jogos aclamados pela crítica, 
    incluindo jogos de sucesso exclusivos para consoles do PlayStation Studios,
     títulos imersivos para o PS VR e indies inovadores.
    </div>
</div>
<div class="flex-container">
    <div class="container-style">
        <h3 class="text-style">Blood & Truth:
            Enfrente um império criminoso implacável e torne-se um herói de ação neste jogo explosivo da London Studio, exclusivo para PlayStation VR.</h3>
            <button type="button" class="see-more">
                <h2>Saiba mais</h2>
            </button>
    </div>
    <div class="container-style">
        <h3 class="text-style">Astro Bot Rescue Mission:
            Ajude Astro a resgatar sua tripulação nesse jogo de plataforma de PS VR repleto de inimigos e chefões em 26 missões arriscadas.</h3>
            <button type="button" class="see-more">
                <h2>Saiba mais</h2>
            </button>
    </div>
    <div class="container-style">
        <h3 class="text-style">Resident Evil 7: Biohazard
            Mergulhe fundo em um novo mundo aterrorizante e sobreviva a este título cheio de emoção, parte da longa série desenvolvida pela Capcom.
        </h3>
        <button type="button" class="see-more">
            <h2>Saiba mais</h2>
        </button>
    </div>
    <div class="container-style">
        <h3 class="text-style">Dreams:
            Entre nesse jogo de criação e molde seu próprio mundo para explorar, completo com música, animações e muito mais, usando o poder do PS VR.
        </h3>
        <button type="button" class="see-more">
            <h2>Saiba mais</h2>
        </button>
    </div>
</div>
    <section class="second-container">
        <div class="video-position">
        <div class="video">
            <img src="{{('img/maxresdefault.webp')}}">
            <i class="fa-regular fa-circle-play"></i>
        </div>
        <div class="video">
            <img src="{{('img/maxresdefault (1).webp')}}">
            <i class="fa-regular fa-circle-play"></i>
        </div>
        </div>
        {{-- BACKGROUND --}}
        <div class="img-box">
            <img src="{{('img/background/star.webp')}}">
        </div>
        {{-- BACKGROUND --}}
        <div class="infos-box">
            <img src="{{('img/games-dragon.webp')}}" alt="">
            <h3>
                DRAGON BALL FIGHTER Z
                A Arc System Works traz seu know-how em jogos de luta e todo seu arrojo visual
                para um dos animes mais famosos de todos os tempos. Batalhas frenéticas e fantásticas de três
                contra três entre os guerreiros mais poderosos do universo são criadas com detalhes espetaculares.
                O jogo também traz um modo narrativo offline, multijogador local para até dois jogadores e dois modos de batalha online. 
              </h3>
              <button type="button" class="see-more">
                <h2>Saiba mais</h2>
            </button>
        </div>
        <div class="infos-box">
            <img src="{{('img/street-fighter.webp')}}" alt="">
            <h3>
                DRAGON BALL FIGHTER Z
                A Arc System Works traz seu know-how em jogos de luta e todo seu arrojo visual
                para um dos animes mais famosos de todos os tempos. Batalhas frenéticas e fantásticas de três
                contra três entre os guerreiros mais poderosos do universo são criadas com detalhes espetaculares.
                O jogo também traz um modo narrativo offline, multijogador local para até dois jogadores e dois modos de batalha online. 
              </h3>
              <button type="button" class="see-more">
                <h2>Saiba mais</h2>
            </button>
        </div>
        <div class="infos-box">
            <img src="{{('img/dnf-duel.webp')}}" alt="">
            <h3>
                DRAGON BALL FIGHTER Z
                A Arc System Works traz seu know-how em jogos de luta e todo seu arrojo visual
                para um dos animes mais famosos de todos os tempos. Batalhas frenéticas e fantásticas de três
                contra três entre os guerreiros mais poderosos do universo são criadas com detalhes espetaculares.
                O jogo também traz um modo narrativo offline, multijogador local para até dois jogadores e dois modos de batalha online. 
              </h3>
              <button type="button" class="see-more">
                <h2>Saiba mais</h2>
            </button>
        </div>
    </section>
    <section class="footer">
        <div class="footer-row">
            <div class="footer-col">
            <h4>MOV GAME</h4>
            <ul class="links">
              <li><a href="#">Segurança</a></li>
              <li><a href="#">Politica de privacidade</a></li>
              <li><a href="#">Visão geral</a></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <div class="icons">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
              <i class="fa-brands fa-github"></i>
            </div>
          </div>
        </div>
      </section>
 @endsection