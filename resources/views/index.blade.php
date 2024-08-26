@extends('layout.basic')
@section('titulo', 'Home')
@section('link', route('login'))
@section('nome', 'Login')
 @section('content')
 <div class="header-background">
    <img src="{{ asset('img/background/Valorant.webp') }}" alt="mapa">
</div>
        <section class="information">
            <h3 class="info-text">Forme equipes com até três amigos e destrua a peste alienígena que ameaça a segurança de seu planeta natal, 
                a Superterra, neste jogo de tiro multiplayer e cooperativo para PS5 e PC da Arrowhead Game Studios.
                <br>Descubra seu próximo jogo inesquecível com a nossa experiência interativa.
                Escolha o que você quer sentir e deixe o PS5 levar você até o centro da ação.</h3>
                <a href="/cadastro">
                     <button class="sing-up">
                   Cadastrar
                </button>
            </a>
        </section>
        <section class="games">
            <div class="games-position">
                    <div class="game-style">
                        <img src={{ asset('img/ratchet-and-clank-rift-apart-game.webp') }} alt="game" class="game-banner">
                    </div>
            </div>
            <div class="games-position">
                    <div class="game-style">
                        <img src={{ asset('img/ragnarok.avif') }} alt="game" class="game-banner">
                    </div>
            </div>
            <div class="games-position">
                <div class="game-style">
                    <img src={{ asset('img/destruction-all-stars.avif') }} alt="game" class="game-banner">
                </div>
            </div>
            <div class="games-position">
                <div class="game-style">
                    <img src={{ asset('img/sackboy-2.webp') }} alt="game" class="game-banner">
                </div>
            </div>
            <div class="games-position">
                <div class="game-style">
                    <img src={{ asset('img/spider-man2.webp') }} alt="game" class="game-banner">
                </div>
            </div>
        </section>
        <div class="slides">
        
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio3">

                <div class="navigation-manual">
                <label for="radio1" class="manual-btn" >
                    <i class="fa-solid fa-chevron-left"></i>
                </label>
                    <label for="radio3" class="manual-btn">
                    <i class="fa-solid fa-angle-right"></i>
                </label>
        </div>
        <div class="slider-container s1">
            <div class="slider">
                <img class="banner" src="{{ asset('img/ps5-games-returnal-image-block-01-en-28jul21.webp') }}">
                <span class="info-text-banner">
                    <h2 class="name">
                        Returnal
                    </h2> 
                    <h3 class="description">
                        Quebre o ciclo do caos em um planeta alienigêna<br> em constante mudança, neste aclamado jogo de tiro<br>
                        em terceira pessoa
                        </h3>
                        <div class="button-position">
                            <button type="button" class="see-more">
                                <h2>Saiba mais</h2>
                            </button>
                        <button type="button" class="buy">
                            Comprar
                        </button>
                    </div>
            </span>
        </div>
        <div class="slide">
            <img class="banner" src="{{ asset('img/feat.webp') }}">
                 <span class="info-text-banner">
                    <h2 class="name">
                        Ghost of Tsushima
                            </h2> 
                             <h3 class="description">
                            Forje um novo caminho e trave uma guerra atípica pela liberdade de Tsushima.
                            Desafie oponentes com sua katana, domine o arco para eliminar ameaças distantes, 
                            desenvolva táticas furtivas para emboscar inimigos e explore uma nova história na Ilha Iki.
                        </h3>
                        <div class="button-position">
                            <button type="button" class="see-more">
                                <h2>Saiba mais</h2>
                            </button>
                          <button type="button" class="buy">
                            Comprar
                        </button>
                       </div>
                </span>
        </div>
        <div class="slide">
            <img class="banner" src="{{ asset('img/the last.webp') }}">
                    <span class="info-text-banner">
                     <h2 class="name">
                    The last of us
                        </h2> 
                         <h3 class="description">
                        Em uma civilização devastada, em que os sobreviventes e infectados veteranos estão a solta<br>
                        Joel é contratado para tirar uma garota de 14 anos de uma quarentena militar.
                </h3>
               <div class="button-position">
                     <button type="button" class="see-more">
                          <h2>Saiba mais</h2>
                      </button>
                            <button type="button" class="buy">
                                Comprar
                            </button>
                        </div>
                    </span>
            </div>
            <div class="slide">
            <img class="banner" src="{{ asset('img/fortnite.webp') }}">
                    <span class="info-text-banner">
                    <h2 class="name">
                    Fortinite
                        </h2> 
                        <h3 class="description">
                       O Fortnite traz diversas experiências, algumas feitas por criadores da comunidade, como os jogos do Modo Criativo,
                       e outras pela Epic Games, como o Battle Royale, a Construção Zero
                       (Battle Royale sem construções) e o Salve o Mundo.
                </h3>
                <div class="button-position">
                      <button type="button" class="see-more">
                                    <h2>Saiba mais</h2>
                            </button>
                   <button type="button" class="buy">
                               Comprar
                    </button>
              </div>
        </span>
    </div> 
    <div class="slide">
        <img class="banner" src="{{ asset('img/resident.webp') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    Resident Evill
                    </h2> 
                    <h3 class="description">
                        Explore os heróis, vilões e jogos inesquecíveis que fazem desta uma das séries de sobrevivência e 
                        terror mais emblemáticas de todos os tempos.
               </h3>
               <div class="button-position">
                <button type="button" class="see-more">
                     <h2>Saiba mais</h2>
                 </button>
                       <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
               </span>
       </div> 
       <div class="slide">
        <img class="banner" src="{{ asset('img/uncharted.webp') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    Uncharted
                    </h2> 
                    <h3 class="description">
                        Nathan Drake, um ex-caçador de tesouros que é persuadido a sair da aposentadoria pelo aparecimento de seu irmão mais velho Samuel. 
                        Junto com seu antigo parceiro Victor Sullivan, eles procuram por pistas para a localização do tesouro perdido do pirata Henry Avery.
               </h3>
               <div class="button-position">
                    <button type="button" class="see-more">
                          <h2>Saiba mais</h2>
                                        </button>
                        <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
           </span>
       </div> 
       <div class="slide">
        <img class="banner" src="{{ asset('img/Gran Turismo.webp') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    Gran Turismo
                    </h2> 
                    <h3 class="description">
                        Um jogador vence uma série de competições de videogame patrocinadas pela Nissan e, por meio de suas habilidades de jogo,
                         se torna um piloto profissional na vida real
               </h3>
               <div class="button-position">
                <button type="button" class="see-more">
                             <h2>Saiba mais</h2>
                                          </button>
                              <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
           </span>
       </div> 
       <div class="slide">
        <img class="banner" src="{{ asset('img/ratchet-and-clank.webp') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    Ratchet and Clank: Rift Apart
                    </h2> 
                    <h3 class="description">
                        Um imperador robótico maligno está determinado a conquistar mundos interdimensionais, e a dimensão de Ratchet e Clank é a próxima da lista.
               </h3>
               <div class="button-position">
                <button type="button" class="see-more">
                        <h2>Saiba mais</h2>
                                    </button>
                            <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
           </span>
       </div> 
       <div class="slide">
        <img class="banner" src="{{ asset('img/prince-of-persia.avif') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    Prince of Persia
                    </h2> 
                    <h3 class="description">
                    Enquanto o sultão está lutando uma guerra em uma terra estrangeira, seu vizir Jaffar, um feiticeiro, toma o poder.
                    Seu único obstáculo ao trono é a filha do Sultão
               </h3>
               <div class="button-position">
                <button type="button" class="see-more">
                          <h2>Saiba mais</h2>
                      </button>
                               <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
           </span>
       </div> 
       <div class="slide">
        <img class="banner" src="{{ asset('img/ciberpunk.jpeg') }}">
                <span class="info-text-banner">
                <h2 class="name">
                    <br>
                    Ciber Punk
                    </h2> 
                    <h3 class="description">
              Quebre o ciclo do caos em um planeta alienigêna<br> em constante mudança, neste aclamado jogo de tiro<br>
              em terceira pessoa
               </h3>
               <div class="button-position">
                <button type="button" class="see-more">
                     <h2>Saiba mais</h2>
                 </button>
                       <button type="button" class="buy">
                           Comprar
                       </button>
                   </div>
           </span>
       </div>      
 <script src="{{ asset('js/script.js') }}"></script>
@endsection