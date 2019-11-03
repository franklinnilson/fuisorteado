<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Agora coloque um amuleto da sorte no seu bolso, acreditar na sorte é um dos segredos para uma vida melhor. -->

        <title>Fui Sorteado | Participe de sorteios é só compartilhar.</title>
        <meta name="robots" content="index,follow" />
        
        <!-- Meta Facebook !-->
        <meta property="og:image" content="./images/avatar-transcerrado-facebook.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200"> 
        
        <!-- Icons !-->
        <link href="./images/favicon.png" rel="icon" type="image/png">
        <link href="./images/transcerrado-152x152.png" sizes="114x114" rel="apple-touch-icon-precomposed">
        <link href="./images/transcerrado-114x114.png" sizes="114x114" rel="apple-touch-icon-precomposed">
        <link href="./images/transcerrado-72x72.png" sizes="72x72" rel="apple-touch-icon-precomposed">
        <link href="./images/transcerrado-57x57.png" rel="apple-touch-icon-precomposed"> 
        
        <!-- CSS !-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
        <script src="./scripts/writter.js"></script>
        <script src="./scripts/main.js"></script>
        <link rel="stylesheet" href="./stylesheets/materialdesignicons.min.css" />
        <link rel="stylesheet" href="./stylesheets/bulma-extensions.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
        <link href='./stylesheets/screen.css' rel='stylesheet'>
        

        
        <script>
            // Habilitar Analytics
            // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            // ga('create', 'UA-50510728-1', 'ipam.org.br/transcerrado');
            // ga('send', 'pageview');
        </script>
    </head>

    <body>
        <div class="overlay"></div>
        
        <header class="header">
            <div class="container">
                <div class="columns">

                    <a href="#help" class="help tooltip is-tooltip-bottom is-tooltip-warning" data-tooltip="Tire suas dúvidas">
                        <i class="mdi mdi-help-circle-outline mdi-36px"></i>
                    </a>
                    <div class="column is-offset-1 is-10">
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            <div class="navbar-brand">
                                <a class="navbar-item" href="/">
                                    <img src="./images/logo-fui-sorteado.png">
                                </a>
                            
                                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="menu-colapsed">
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                    <span aria-hidden="true"></span>
                                </a>
                            </div>
                            
                            <div id="menu-colapsed" class="navbar-menu">
                                <div class="navbar-end">
                                    <a class="navbar-item" href="#">Sorteios</a>
                                    <a class="navbar-item" href="#">Parceiros</a>
                                    <a class="navbar-item" href="#">Contato</a>

                                    <div id="btn-login" class="button is-primary">
                                        <span class="has-text-weight-medium">Entrar</span>

                                        <div class="area-login">    
                                            <div class="sub-login-container">
                                                <div class="bg-login"></div>
                                                <div class="sub-login">
                                                    <div class="container">
                                                        <div class="columns">
                                                            <div class="column is-4 is-offset-1 has-text-left">
                                                                <form> 
                                                                    <div class="field">
                                                                        <label class="label">Email</label>
                                                                        <div class="control has-icons-left">
                                                                            <input class="input" type="email" placeholder="meuemail@email.com.br" required>
                                                                            <span class="icon is-small is-left">
                                                                                <i class="mdi mdi-email-open-outline"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="field">
                                                                        <label class="label">Password</label>
                                                                        <div class="control has-icons-left">
                                                                            <input class="input" type="password" placeholder="•••••••" required>
                                                                            <span class="icon is-small is-left">
                                                                                <i class="mdi mdi-key"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="field">
                                                                        <label class="checkbox">
                                                                            <input type="checkbox"> Remember me
                                                                        </label>
                                                                    </div>

                                                                    <div class="field">
                                                                        <a id="show-password-recovery-modal">I forgot my password!</a>
                                                                    </div>

                                                                    <div class="field">
                                                                        <button class="button is-primary">
                                                                        Acessar
                                                                        </button>
                                                                    </div>

                                                                    <div class="field">
                                                                        <button class="button is-facebook">
                                                                        Entrar com Facebook
                                                                        </button> 
                                                                        <button class="button is-google">
                                                                        Entrar com Gmail
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="column is-4 is-offset-2 has-text-left">
                                                                <h4 class="subtitle is-size-5 has-text-weight-medium">#criarconta</h4>
                                                                <h1 class="title is-size-3">Nem acreditamos <br>que você ainda não <br> criou a sua<span>conta!</span></h1>
                                                                <p class="color-gray">Está bem, vamos lá! Crie sua conta em<br>apenas 2 minutinhos e participe.</p>
                                                                <a href="" class="button is-white is-medium is-custom">
                                                                    <span>Criar conta</span>
                                                                    <span class="icon">
                                                                        <i class="mdi mdi-arrow-right mdi-24px"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-item-buttons">
                                        <div class="buttons">
                                            <div class="menu-categoria">
                                                <a class="button is-light" id="menu-categoria">
                                                    <svg fill="#363636" version="1.1" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 276.167 276.167" style="enable-background:new 0 0 276.167 276.167;">
                                                        <path d="M33.144,2.471C15.336,2.471,0.85,16.958,0.85,34.765s14.48,32.293,32.294,32.293s32.294-14.486,32.294-32.293
                                                                S50.951,2.471,33.144,2.471z"/>
                                                        <path d="M137.663,2.471c-17.807,0-32.294,14.487-32.294,32.294s14.487,32.293,32.294,32.293c17.808,0,32.297-14.486,32.297-32.293
                                                            S155.477,2.471,137.663,2.471z"/>
                                                        <path d="M243.873,67.059c17.804,0,32.294-14.486,32.294-32.293S261.689,2.471,243.873,2.471s-32.294,14.487-32.294,32.294
                                                            S226.068,67.059,243.873,67.059z"/>
                                                        <path d="M32.3,170.539c17.807,0,32.297-14.483,32.297-32.293c0-17.811-14.49-32.297-32.297-32.297S0,120.436,0,138.246
                                                            C0,156.056,14.493,170.539,32.3,170.539z"/>
                                                        <path d="M136.819,170.539c17.804,0,32.294-14.483,32.294-32.293c0-17.811-14.478-32.297-32.294-32.297
                                                            c-17.813,0-32.294,14.486-32.294,32.297C104.525,156.056,119.012,170.539,136.819,170.539z"/>
                                                        <path d="M243.038,170.539c17.811,0,32.294-14.483,32.294-32.293c0-17.811-14.483-32.297-32.294-32.297
                                                            s-32.306,14.486-32.306,32.297C210.732,156.056,225.222,170.539,243.038,170.539z"/>
                                                        <path d="M33.039,209.108c-17.807,0-32.3,14.483-32.3,32.294c0,17.804,14.493,32.293,32.3,32.293s32.293-14.482,32.293-32.293
                                                            S50.846,209.108,33.039,209.108z"/>
                                                        <path d="M137.564,209.108c-17.808,0-32.3,14.483-32.3,32.294c0,17.804,14.487,32.293,32.3,32.293
                                                            c17.804,0,32.293-14.482,32.293-32.293S155.368,209.108,137.564,209.108z"/>
                                                        <path d="M243.771,209.108c-17.804,0-32.294,14.483-32.294,32.294c0,17.804,14.49,32.293,32.294,32.293
                                                            c17.811,0,32.294-14.482,32.294-32.293S261.575,209.108,243.771,209.108z"/>
                                                    </svg>
                                                </a>

                                                <div class="area-categoria">    
                                                    <div class="sub-categoria-container">
                                                        <div class="sub-categoria">
                                                            <div class="container">
                                                                <div class="columns">
                                                                    <div class="column is-3">
                                                                        <h4 class="title is-5"> Os mais acessados</h4>
                                                                        <ul>
                                                                            <li><a class="button is-primary" href="/casa-tok-e-stok/s?b=tok-e-stok&amp;d=casa"> Tok&amp;Stok </a></li>
                                                                            <li><a class="button is-primary" href="/casa-disney/s?b=disney&amp;d=casa"> Disney </a></li>
                                                                            <li><a class="button is-primary" href="/tramontina/s?d=casa&amp;q=Tramontina+"> Tramontina </a></li>
                                                                            <li><a class="button is-primary" href="/le-creuset/s?d=casa&amp;q=le+creuset"> Le Creuset </a></li>
                                                                            <li><a class="button is-primary" href="/casa-imaginarium/s?b=imaginarium&amp;d=casa"> Imaginarium </a></li>
                                                                            <li><a class="button is-primary" href="/artefacto/s?d=casa&amp;q=artefacto"> Artefacto </a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="column">
                                                                        <form action="">
                                                                            <div class="field has-addons">
                                                                                <div class="control is-expanded">
                                                                                    <input type="search" id="search" name="query" autocomplete="off" autocapitalize="off" spellcheck="false" autocorrect="off" placeholder="Busque &quot;Diesel&quot;" class="input">
                                                                                </div>
                                                                                <div class="control">
                                                                                    <a class="button is-info">
                                                                                    <i class="mdi mdi-magnify" aria-hidden="true"></i> 
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <div class="columns">
                                                                            <div class="column">
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/moveis/s?d=casa&amp;q=m%C3%B3veis"> Móveis </a></li>
                                                                                    <li><a href="/cadeiras/s?d=casa&amp;s=casa-moveis-cadeiras"> Cadeiras </a></li>
                                                                                    <li><a href="/mesas/s?d=casa&amp;s=casa-moveis-mesas"> Mesas </a></li>
                                                                                    <li><a href="/poltronas/s?d=casa&amp;s=casa-moveis-poltronas"> Poltronas </a></li>
                                                                                    <li><a href="/racks/s?d=casa&amp;s=casa-moveis-racks"> Racks </a></li>
                                                                                    <li><a href="/sofas/s?d=casa&amp;s=casa-moveis-sofas"> Sofás </a></li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/antiquario/s?d=casa&amp;q=antiqu%C3%A1rio"> Antiquário </a></li>
                                                                                    <li><a href="/decoracao/s?d=casa&amp;q=decora%C3%A7%C3%A3o"> Decoração </a></li>
                                                                                    <li><a href="/eletrodomesticos/s?d=casa&amp;q=eletrodom%C3%A9sticos"> Eletrodomésticos </a></li>
                                                                                    <li><a href="/iluminacao/s?d=casa&amp;q=ilumina%C3%A7%C3%A3o"> Iluminação </a></li>
                                                                                    <li><a href="/cozinha/s?d=casa&amp;q=cozinha"> Cozinha </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="column">
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/computadores/s?d=info-eletro&amp;q=computadores"> Computadores </a></li>
                                                                                    <li><a href="/desktop/s?d=info-eletro&amp;s=info-eletro-computadores-desktop"> Desktop </a></li>
                                                                                    <li><a href="/computadores-teclado/s?d=info-eletro&amp;s=info-eletro-computadores-teclado"> Teclado </a></li>
                                                                                    <li><a href="/notebook/s?d=info-eletro&amp;s=info-eletro-computadores-notebook"> Notebook </a></li>
                                                                                    <li><a href="/netbook/s?d=info-eletro&amp;s=info-eletro-computadores-netbook"> Netbook </a></li>
                                                                                    <li><a href="/mouse/s?d=info-eletro&amp;s=info-eletro-computadores-mouse"> Mouse </a></li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/tablets/s?d=info-eletro&amp;q=tablets"> Tablets </a></li>
                                                                                    <li><a href="/ipads/s?d=info-eletro&amp;s=info-eletro-tablets-ipads"> iPads </a></li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/musica/s?d=info-eletro&amp;q=m%C3%BAsica"> Música </a></li>
                                                                                    <li><a href="/ipod-e-mp3/s?d=info-eletro&amp;s=info-eletro-musica-ipod-e-mp3"> iPod e MP3 </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="column">
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/telefonia/s?d=info-eletro&amp;q=telefonia"> Telefonia </a></li>
                                                                                    <li><a href="/iphone/s?d=info-eletro&amp;s=info-eletro-telefonia-iphone"> iPhone </a></li>
                                                                                    <li><a href="/blackberry/s?d=info-eletro&amp;s=info-eletro-telefonia-blackberry"> BlackBerry </a></li>
                                                                                    <li><a href="/galaxy/s?d=info-eletro&amp;s=info-eletro-telefonia-galaxy"> Galaxy </a></li>
                                                                                    <li><a href="/telefonia-fixos/s?d=info-eletro&amp;s=info-eletro-telefonia-fixos"> Fixos </a></li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/fotografia/s?d=info-eletro&amp;q=fotografia"> Fotografia </a></li>
                                                                                    <li><a href="/fotografia-lomo/s?d=info-eletro&amp;s=info-eletro-fotografia-lomo"> Lomo </a></li>
                                                                                    <li><a href="/polaroids/s?d=info-eletro&amp;s=info-eletro-fotografia-polaroids"> Polaroids </a></li>
                                                                                    <li><a href="/analogicas/s?d=info-eletro&amp;s=info-eletro-fotografia-analogicas"> Analógicas </a></li>
                                                                                    <li><a href="/lentes-e-acessorios/s?d=info-eletro&amp;s=info-eletro-fotografia-lentes-e-acessorios"> Lentes e acessórios </a></li>
                                                                                    <li><a href="/filmadoras/s?d=info-eletro&amp;s=info-eletro-fotografia-filmadoras"> Filmadoras </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="column">
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/videogame/s?d=info-eletro&amp;q=videogame"> Videogame </a></li>
                                                                                    <li><a href="/consoles/s?d=info-eletro&amp;s=info-eletro-videogame-consoles"> Consoles </a></li>
                                                                                    <li><a href="/jogos/s?d=info-eletro&amp;s=info-eletro-videogame-jogos"> Jogos </a></li>
                                                                                    <li><a href="/videogame-acessorios/s?d=info-eletro&amp;s=info-eletro-videogame-acessorios"> Acessórios </a></li>
                                                                                </ul>
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/tv-s-e-displays/s?d=info-eletro&amp;q=tv%27s+e+displays"> Tv's e displays </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="column">
                                                                                <ul>
                                                                                    <li><a class="categoria-primaria" href="/diversos/s?d=etc-tal"> Etc&amp;Tal </a></li>
                                                                                    <li><a href="/cacarecos/s?d=etc-tal&amp;q=cacarecos"> Cacarecos </a></li>
                                                                                    <li><a href="/jogos/s?d=etc-tal&amp;q=jogos"> Jogos </a></li>
                                                                                    <li><a href="/carros/s?d=etc-tal&amp;q=carros"> Carros </a></li>
                                                                                    <li><a href="/esportes-e-outdoor/s?d=etc-tal&amp;q=esportes+e+outdoor"> Esportes e outdoor </a></li>
                                                                                    <li><a href="/livraria/s?d=etc-tal&amp;q=livraria"> Livraria </a></li>
                                                                                    <li><a href="/papelaria/s?d=etc-tal&amp;q=papelaria"> Papelaria </a></li>
                                                                                    <li><a href="/pets/s?d=etc-tal&amp;q=pets"> Pets </a></li>
                                                                                    <li><a href="/musica/s?d=etc-tal&amp;q=m%C3%BAsica"> Música </a></li>
                                                                                    <li><a href="/filmes-e-series/s?d=etc-tal&amp;q=filmes+e+s%C3%A9ries"> Filmes e séries </a></li>
                                                                                    <li><a href="/vintage-e-retro/s?d=etc-tal&amp;q=vintage+e+retr%C3%B4"> Vintage e retrô </a></li>
                                                                                    <li><a href="/malas/s?d=etc-tal&amp;q=malas"> Malas </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>