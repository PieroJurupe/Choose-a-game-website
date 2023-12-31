<?php
include("conexion.php");
include("logeo.php");
?>

<!DOCTYPE html>
<html lang="spanish">

<head>
  <title>Find Your Game</title><!-- Título de la página que aparece en la pestaña del navegador -->
  <meta name="description" content="encuentra tu juego con ia" /><!-- Megaetiqueta-->
  <meta property="og:title" content="Find Your Game" /> <!-- Metaetiqueta-->
  <meta property="og:description" content="encuentra tu juego con ia" /> <!-- Metaetiqueta-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <!-- Estilos CSS en línea para el restablecimiento de estilos predeterminados -->
  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <!-- Estilos CSS en línea para los estilos predeterminados de la página -->
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>

  <!-- Enlaces a hojas de estilo externas y fuentes de Google Fonts -->
  <link rel="shortcut icon" href="public/pngtree-black-code-icon-image_1130454-photoroom.png-photoroom.png"
    type="icon/png" sizes="32x32" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" />
  <!-- Enlace a la hoja de estilo-->
  <link rel="stylesheet" href="./style.css" />
  <link href="./Blog.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Google Fonts links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;1,600&family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700;900&family=REM:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap"
    rel="stylesheet">
  <link href="./index.css" rel="stylesheet" />
</head>

<body>
<nav>
<ul>

<?php if(!isset($_SESSION['nombre_usuario'])) { ?>
<ul class="login-y-registro">        
  li class="login-boton"><a class="login-a" href="#"></a></li>

  <li class="registro-boton"><a class="register-a" href="registro.php">Registrate</a></li>
  <li >login</a></li>
  <li class="registro-boton"><a class="register-a" href="login.php">login</a></li>  
          
  </ul><nav>;
<?php } ?>
</ul>
</nav>
<li>
    <?php if(isset($_SESSION['nombre_usuario'])) { ?>
        <a href="#"><?php echo $_SESSION['nombre_usuario']; ?></a>
    <?php } ?>
</li>

  

  <link rel="stylesheet" href="./style.css" />
  <div>
    <link href="./index.css" rel="stylesheet" />

    <!-- principal -- inicio  -->
    <div id="principal" class="principal-container">

      <header>
        <a href="index.html" class="logo">FYG</a>
        <ul class="navlist">
       
          <li><a href="misjuegos.html">Mis juegos</a></li>

          <li><a href="Trends.html">Trends</a></li>

          <li><a href="Nosotros.html">Nosotros</a></li>

          <li><a href="about.html">Informacion</a></li>

          <li><a href="Blog.html">Blog</a></li>

          <li><a isset= 'nombre_usuario'></a><li>
        </ul>
       

        <div class="bx bx-menu" id="menu-icon"></div>


      </header>

      
      <section class="hero">
        <div class="hero-text">
          <h4>¿Te gustan los videojuegos?</h4>
          <h1>Encuentralo con IA</h1>
          <p>Con nuestra herramienta de IA, podrás explorar juegos para ti,<br> basado en tu perfil de jugador y tus
            gustos.</p>
          <a href="#principal-text062">Descubre como</a>
          <a href="#principal-text024" class="ctaa"><i class="ri-play-fill"></i>Mira esto</a>
        </div>
        <div class="hero-img">
          <img src="img/FYGbanner.png">
        </div>
      </section>

      <div class="icons">
        <a href="https://www.instagram.com/find.yourgame/"><i class="ri-instagram-line"></i></a>
        <a href="https://web.facebook.com/profile.php?id=61551374375595"><i class="ri-facebook-circle-fill"></i></a>
        <a href="https://twitter.com/F1nd_Your_Games"><i class="ri-twitter-fill"></i></a>
      </div>
      <div class="scroll-down">
        <a href="#"><i class="ri-arrow-drop-down-line"></i></a>
      </div>





      <!-- Contenido principal de la página 
      <div class="principal-inicio">
        <div class="principal-div-impacto">
          <h1 class="principal-texto-impacto">
            Encuentra Tu juego ideal con IA
          </h1>
          <div class="principal-div-botones-info">
            <a href="#ChatBot_FYG">Referencia para el boton de Empezar (Aquí colocaremos el formulario)
              <button type="button" class="principal-boton-empezar button">
                Empezar
              </button>
            </a>
            <a href="https://www.google.com/">referencia para el boton de Descubre como (Aquí colocaremos el About y agregar efectos)

              <button type="button" class="principal-boton-descubrecomo button">
                Descubre como
              </button>
            </a>
          </div>
        </div>
        <img
          src="https://media.discordapp.net/attachments/1161483919263289445/1161539127771152445/434698877026201.gif?ex=6538aa9c&is=6526359c&hm=f171f882bc9b096c1acf61f35e08c92375ba61b8fbee52b7df865fbd07f2652f&=&width=3000&height=3000"
          alt="image" class="principal-tapa-logos" />
      </div>-->

      <div class="principal-primeros-pasos">
        <h1 class="principal-primeros-pasos-titulo">
          Descubre el juego perfecto para ti
        </h1>
        <div class="principal-div-primeros-pasos">
          <div class="principal-pasos-parte1">
            <div class="principal-paso1">
              <h1 class="principal-paso1-numero">1</h1>
              <h1 class="principal-paso1-titulo">
                Habla con nuestro ChatBot
              </h1>
              <span class="principal-paso1-texto">
                <span>Ve a la parte final y descubre nuestro ChatBot</span>
                <br />
              </span>
            </div>
            <div class="principal-paso2">
              <h1 class="principal-paso2-numero">2</h1>
              <h1 class="principal-paso2-titulo">Responde sus preguntas</h1>
              <span class="principal-paso3-texto">
                <span>Te hara unas breves preguntas, respondelas</span>
                <br />
              </span>
            </div>
          </div>
          <div class="principal-pasos-parte2">
            <div class="principal-paso3">
              <h1 class="principal-paso3-numero"><span>3</span></h1>
              <h1 class="principal-paso3-titulo">Descubre los juegos</h1>
              <span class="principal-paso3-texto1">
                <span>Listo, ya tienes tu lista de juegos</span>
                <br />
              </span>
            </div>
            <div class="principal-paso4">
              <h1 class="principal-paso4-numero"><span>4</span></h1>
              <h1 class="principal-paso4-titulo">¡Y a jugar!</h1>
              <span class="principal-paso4-texto">
                <span>Ahora eligue una de las 4 opciones que te ofrece</span>
                <br />
              </span>
            </div>
          </div>
        </div>
      </div>


      <div class="principal-div-top-juegos">
        <article class="principal-article-juegos"></article>
        <h1 class="principal-text018">Juegos destacados</h1>
        <div class="principal-div-top-juegos">
          <h1 class="principal-titulo-juegos">
            <!-- SPAN DE MENU JUEGOS 1 -->
          </h1>
          <div class="principal-contenedor-article">
  
            <article class="principal-article-juego1">
              <!--MARIO BROS-->
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1152338842154717194/0bc65191bacfeb6472461be13e22b1d2.jpg?width=235&height=418"
                alt="PortadaMario3DWorld">
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1152339191900930179/6322df7e4b62bae643052806fbb4c67e-PhotoRoom.png-PhotoRoom.png?width=203&height=418"
                alt="MarioBrosPng">
  
            </article>
            <article class="principal-article-juego2">
              <!--STRAY-->
              <img src="https://www.xtrafondos.com/wallpapers/vertical/juego-de-gato-stray-11554.jpg">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/f9104117-19fa-453f-9ca6-01d9978da4ca/df9r26y-1485beec-8518-433c-aee4-23cfd374a37e.png"
                alt="LinkZeldaPng">
  
            </article>
            <article class="principal-article-juego1">
              <!--RDR2-->
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1153516003121184789/256801b2f79a64c4fb33bdd82151b52d.jpg?width=366&height=652"
                alt="RDR2Portada">
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1153516249276497930/png-clipart-man-holding-gun-graphic-illustration-red-dead-redemption-2-grand-theft-auto-v-rockstar-games-video-game-others-miscellaneous-microphone-PhotoRoom.png-PhotoRoom.png?width=600&height=652"
                alt="ArthurPng">
  
            </article>
            <article class="principal-article-juego2">
              <!--ZELDA-->
              <img src="https://i.pinimg.com/originals/24/a6/c1/24a6c18f79d7e44a07c2e1e5de4ab99c.jpg"
                alt="PortaZeldaTOTK">
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1153508497649049670/TheLegendOfZeldaTearsOfTheKingdom_Link_sideimg_01.png?width=433&height=597"
                alt="LinkZeldaPng">
  
            </article>
            <article class="principal-article-juego1">
              <!--MARIO BROS-->
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1153518900848377977/god-of-war-ragnarok-personajes-11258.jpg?width=368&height=652"
                alt="PortadaMario3DWorld">
              <img
                src="https://media.discordapp.net/attachments/836782334274437181/1153519397755953192/images-PhotoRoom.png-PhotoRoom.png?width=231&height=264"
                alt="MarioBrosPng">
  
            </article>
            <a href=Trends.html> </a>
            <button type="button" class="boton-descubre-mas"><a href="Trends.html">Descubre más aquí</a> </button>
          </div>
  
  
  
        </div>
      </div>
      <div class="principal-features">
        <h1 class="principal-text019">
          <span>Enterate de las&nbsp;ventajas</span>
          <br />
          <span>de usar nuestro bot</span>
          <br />
        </h1>
        <div class="principal-separator"></div>
        <div class="principal-container02">
          <div class="principal-container03">
            <div class="feature-card4-feature-card feature-card4-root-class-name1">
              <svg viewBox="0 0 1024 1024" class="feature-card4-icon">
                <path
                  d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z">
                </path>
              </svg>
              <h2 class="feature-card4-text">
                <span>Ahorra tiempo y dinero</span>
              </h2>
              <span class="feature-card4-text1">
                <span>
                  Nuestra web te permite encontrar juegos que se ajusten a tu
                  presupuesto y a tus preferencias, sin tener que buscar en
                  múltiples sitios o gastar en juegos que no te gustan.
                </span>
              </span>
            </div>
            <div class="feature-card4-feature-card feature-card4-root-class-name4">
              <svg viewBox="0 0 1024 1024" class="feature-card4-icon">
                <path
                  d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z">
                </path>
              </svg>
              <h2 class="feature-card4-text">
                <span>Descubre nuevos juegos</span>
              </h2>
              <span class="feature-card4-text1">
                <span>
                  Nuestra web te recomienda juegos basados en tus gustos, tu
                  personalidad y tu estado de ánimo. Así podrás descubrir
                  nuevos juegos que quizás no conocías o que no habías probado
                  antes.
                </span>
              </span>
            </div>
            <div class="feature-card4-feature-card feature-card4-root-class-name3">
              <svg viewBox="0 0 1024 1024" class="feature-card4-icon">
                <path
                  d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z">
                </path>
              </svg>
              <h2 class="feature-card4-text">
                <span>Comparte tu opinión</span>
              </h2>
              <span class="feature-card4-text1">
                <span>
                  Nuestra web te permite valorar y comentar los juegos que has
                  jugado, así como ver las opiniones de otros usuarios. De
                  esta forma, podrás compartir tu experiencia y conocer la de
                  otros jugadores.
                </span>
              </span>
            </div>
            <div class="feature-card4-feature-card feature-card4-root-class-name2">
              <svg viewBox="0 0 1024 1024" class="feature-card4-icon">
                <path
                  d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z">
                </path>
              </svg>
              <h2 class="feature-card4-text">
                <span>Una interfaz amigable</span>
              </h2>
              <span class="feature-card4-text1">
                <span>
                  Nuestra web tiene un diseño gráfico y de interacción que te
                  facilita el uso y la navegación. Podrás acceder a todas las
                  funcionalidades de forma rápida y sencilla, con un estilo
                  moderno y atractivo.
                </span>
              </span>
            </div>
          </div>
          <img alt="image" src="https://framerusercontent.com/images/Zyj22vubolRbV1GvS1r7k6mM7hQ.png"
            class="principal-image" />
        </div>
      </div>
      <h1 id="principal-text024" class="principal-text024">Ultimos lanzamientos</h1>
      <div class="principal-gallery">
        <div class="principal-container04">
          <div class="principal-container05">
            <h1 class="principal-text025">
              <span>¿Se podra jugar en las</span>
              <br />
              <span>gafas VR de apple?</span>
              <br />
            </h1>
            <span class="principal-text030">
              <span>Es la pregunta que muchos se hacen</span>
              <br />
              <br />
            </span>
          </div>
        </div>
        <div class="principal-container06">
          <div class="principal-container07">
            <h1 class="principal-text034">
              'Starfield' deslumbra por su ambición
            </h1>
            <span class="principal-text035">¿Cumplira con lo esperado?</span>
          </div>
        </div>
        <div class="principal-container08">
          <div class="principal-container09">
            <h1 class="principal-text036">
              <span class="principal-text037">Spider-man 2 el juego</span>
              <br />
              <span>del momento</span>
              <br />
            </h1>
            <span class="principal-text041">
              La actualidad de los videojuegos VR
            </span>
          </div>
        </div>
        <div class="principal-container10">
          <div class="principal-container11">
            <h1 class="principal-text042">¡PS5 slim ya esta aqui!</h1>
            <span class="principal-text043">
              Enterate como fue la presentacion
            </span>
          </div>
        </div>
        <div class="principal-container12">
          <div class="principal-container13">
            <h1 class="principal-text044">Cumplio las expectativas</h1>
            <span class="principal-text045">
              <span>Exitoso lanzamiento de la nueva entrega de</span>
              <br />
              <span>Mario Bros</span>
              <br />
            </span>
          </div>
        </div>
        <div class="principal-container14">
          <div class="principal-container15">
            <h1 class="principal-text050">
              <span class="principal-text051">¿Ya hay fecha para</span>
              <br />
              <span>el trailer?</span>
              <br />
            </h1>
            <span class="principal-text055">
              <span>Cuanto tiempo mas</span>
              <br />
              <span>tendremos que esperar</span>
              <br />
            </span>
          </div>
        </div>
      </div>
      <div class="principal-hero1">
        <span class="principal-text060">Encuentra tu juego ideal</span>
        <h1 class="principal-text061">Prueba nuestro ChatBot (Beta)</h1>
        <button class="principal-button1 button"><a href="#principal-text062">Probar ChatBot</a></button>
      </div>
      <div class="principal-steps">
        <h1 class="principal-text062">¿Como fue el proceso de desarrollo?</h1>
        <span class="principal-text063">
          <span>
            El paso a paso del desarrollo de la idea concepto de Find your
            game
          </span>
          <br />
        </span>
        <div class="principal-container16">
          <div class="principal-step">
            <div class="principal-container17">
              <div class="principal-line"></div>
              <div class="principal-container18">
                <svg viewBox="0 0 1024 1024" class="principal-icon">
                  <path
                    d="M634 558q92-64 92-174 0-88-63-151t-151-63-151 63-63 151q0 46 27 96t65 78l36 26v98h172v-98zM512 86q124 0 211 87t87 211q0 156-128 244v98q0 18-12 30t-30 12h-256q-18 0-30-12t-12-30v-98q-128-88-128-244 0-124 87-211t211-87zM384 896v-42h256v42q0 18-12 30t-30 12h-172q-18 0-30-12t-12-30z">
                  </path>
                </svg>
              </div>
              <div class="principal-line1"></div>
            </div>
            <div class="principal-container19">
              <h1 class="principal-text066">Ideas</h1>
              <span class="principal-text067">
                <span>
                  Crear una plataforma web que ayude a los usuarios a
                  encontrar juegos
                </span>
                <br />
              </span>
            </div>
          </div>
          <div class="principal-step1">
            <div class="principal-container20">
              <div class="principal-line2"></div>
              <div class="principal-container21">
                <svg viewBox="0 0 1024 1024" class="principal-icon02">
                  <path
                    d="M746 512q26 0 45-18t19-46-19-46-45-18-45 18-19 46 19 46 45 18zM618 342q26 0 45-19t19-45-19-45-45-19-45 19-19 45 19 45 45 19zM406 342q26 0 45-19t19-45-19-45-45-19-45 19-19 45 19 45 45 19zM278 512q26 0 45-18t19-46-19-46-45-18-45 18-19 46 19 46 45 18zM512 128q158 0 271 100t113 242q0 88-63 150t-151 62h-74q-28 0-46 19t-18 45q0 22 16 42t16 44q0 28-18 46t-46 18q-160 0-272-112t-112-272 112-272 272-112z">
                  </path>
                </svg>
              </div>
              <div class="principal-line3"></div>
            </div>
            <div class="principal-container22">
              <h1 class="principal-text070">Diseño</h1>
              <span class="principal-text071">
                <span>
                  elaboramos el diseño gráfico y de interacción de la
                  plataforma web,
                </span>
                <br />
              </span>
            </div>
          </div>
          <div class="principal-step2">
            <div class="principal-container23">
              <div class="principal-line4"></div>
              <div class="principal-container24">
                <svg viewBox="0 0 1024 1024" class="principal-icon04">
                  <path d="M576 736l96 96 320-320-320-320-96 96 224 224z"></path>
                  <path d="M448 288l-96-96-320 320 320 320 96-96-224-224z"></path>
                </svg>
              </div>
              <div class="principal-line5"></div>
            </div>
            <div class="principal-container25">
              <h1 class="principal-text074">Desarollo</h1>
              <span class="principal-text075">
                <span>
                  Se implementa el código fuente de la plataforma web
                </span>
                <br />
              </span>
            </div>
          </div>
          <div class="principal-step3">
            <div class="principal-container26">
              <div class="principal-line6"></div>
              <div class="principal-container27">
                <svg viewBox="0 0 1024 1024" class="principal-icon07">
                  <path
                    d="M480 64c-265.096 0-480 214.904-480 480 0 265.098 214.904 480 480 480 265.098 0 480-214.902 480-480 0-265.096-214.902-480-480-480zM751.59 704c8.58-40.454 13.996-83.392 15.758-128h127.446c-3.336 44.196-13.624 87.114-30.68 128h-112.524zM208.41 384c-8.58 40.454-13.996 83.392-15.758 128h-127.444c3.336-44.194 13.622-87.114 30.678-128h112.524zM686.036 384c9.614 40.962 15.398 83.854 17.28 128h-191.316v-128h174.036zM512 320v-187.338c14.59 4.246 29.044 11.37 43.228 21.37 26.582 18.74 52.012 47.608 73.54 83.486 14.882 24.802 27.752 52.416 38.496 82.484h-155.264zM331.232 237.516c21.528-35.878 46.956-64.748 73.54-83.486 14.182-10 28.638-17.124 43.228-21.37v187.34h-155.264c10.746-30.066 23.616-57.68 38.496-82.484zM448 384v128h-191.314c1.88-44.146 7.666-87.038 17.278-128h174.036zM95.888 704c-17.056-40.886-27.342-83.804-30.678-128h127.444c1.762 44.608 7.178 87.546 15.758 128h-112.524zM256.686 576h191.314v128h-174.036c-9.612-40.96-15.398-83.854-17.278-128zM448 768v187.34c-14.588-4.246-29.044-11.372-43.228-21.37-26.584-18.74-52.014-47.61-73.54-83.486-14.882-24.804-27.75-52.418-38.498-82.484h155.266zM628.768 850.484c-21.528 35.876-46.958 64.746-73.54 83.486-14.184 9.998-28.638 17.124-43.228 21.37v-187.34h155.266c-10.746 30.066-23.616 57.68-38.498 82.484zM512 704v-128h191.314c-1.88 44.146-7.666 87.040-17.28 128h-174.034zM767.348 512c-1.762-44.608-7.178-87.546-15.758-128h112.524c17.056 40.886 27.344 83.806 30.68 128h-127.446zM830.658 320h-95.9c-18.638-58.762-44.376-110.294-75.316-151.428 42.536 20.34 81.058 47.616 114.714 81.272 21.48 21.478 40.362 44.938 56.502 70.156zM185.844 249.844c33.658-33.658 72.18-60.932 114.714-81.272-30.942 41.134-56.676 92.666-75.316 151.428h-95.898c16.138-25.218 35.022-48.678 56.5-70.156zM129.344 768h95.898c18.64 58.762 44.376 110.294 75.318 151.43-42.536-20.34-81.058-47.616-114.714-81.274-21.48-21.478-40.364-44.938-56.502-70.156zM774.156 838.156c-33.656 33.658-72.18 60.934-114.714 81.274 30.942-41.134 56.678-92.668 75.316-151.43h95.9c-16.14 25.218-35.022 48.678-56.502 70.156z">
                  </path>
                </svg>
              </div>
              <div class="principal-line7"></div>
            </div>
            <div class="principal-container28">
              <h1 class="principal-text078">Proximamente...</h1>
              <span class="principal-text079">
                <span>
                  Se despliega la plataforma web en un servidor al publico en
                  general
                </span>
                <br />
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="principal-blog">
        <div class="principal-container29">
          <a href="https://www.xataka.com/videojuegos/spider-man-2-posiblemente-mejor-juego-exclusivo-playstation-5-eso-conlleva-algunos-problemas"
            target="_blank" rel="noreferrer noopener" class="principal-link">
            <div class="blog-post-card2-blog-post-card blog-post-card2-root-class-name3">
              <img alt="image" src="https://i.blogs.es/344c24/msm2_launch_peteironarms_4k_legal_2023/1200_800.jpeg"
                image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
                class="blog-post-card2-image" />
              <div class="blog-post-card2-container">
                <div class="blog-post-card2-container1">
                  <span class="blog-post-card2-text">
                    <span>RESEÑA</span>
                  </span>
                  <span class="blog-post-card2-text1"><span>ayer</span></span>
                </div>
                <h1 class="blog-post-card2-text2">
                  <span>Spiderman 2 el mejor juego exclusivo de PS5</span>
                </h1>
                <span class="blog-post-card2-text3">
                  <span>
                    'Spider-Man 2' es un juego soberbio. Consciente de que no
                    puede repetir el impacto de la primera entrega, pero
                    habiendo experimentado ya con las posibilidades de
                    expandir el mundo original gracias al continuista y
                    estupendo 'Miles Morales', Insomniac inyecta en esta
                    secuela las novedades suficientes para que el juego no
                    parezca un clon del primero, pero sin perder nada de su
                    estilo.
                  </span>
                </span>
                <div class="blog-post-card2-container2">
                  <div class="blog-post-card2-profile">
                    <img alt="cargando"
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwuJXwBjfiaEYpnbB18iDzPCeEu8SSbhoh-egwhYHJw&amp;s"
                      class="blog-post-card2-image1" />
                    <span class="blog-post-card2-text4">
                      <span>Xakata.com</span>
                    </span>
                  </div>
                  <span class="blog-post-card2-text5">Leer mas -&gt;</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="principal-container30">
          <a href="https://www.3djuegos.com/juegos/the-legend-of-zelda-tears-of-the-kingdom/noticias/todos-hablan-analisis-que-le-ha-puesto-6-a-zelda-tears-of-the-kingdom-esto-que-dice"
            target="_blank" rel="noreferrer noopener" class="principal-link">
          <div class="blog-post-card2-blog-post-card blog-post-card2-root-class-name">
            <img alt="image"
              src="https://www.escapistmagazine.com/wp-content/uploads/2023/05/zelda-tears-of-the-kingdom-metacritic-score.jpg?fit=1280%2C720"
              image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
              class="blog-post-card2-image" />
            <div class="blog-post-card2-container">
              <div class="blog-post-card2-container1">
                <span class="blog-post-card2-text"><span>CRITICA</span></span>
                <span class="blog-post-card2-text1">
                  <span>hace 3 dias</span>
                </span>
              </div>
              <h1 class="blog-post-card2-text2">
                <span>La curiosa nota de metacritic a Zelda TOTK</span>
              </h1>
              <span class="blog-post-card2-text3">
                <span>
                  El público ya ha podido jugar durante todo un fin de semana
                  a The Legend of Zelda: Tears of the Kingdom, el videojuego
                  exclusivo de Nintendo Switch y uno de los lanzamientos más
                  importantes del año 2023. Su llegada nos ha permitido
                  conocer la opinión de los medios profesionales; y, aunque la
                  crítica lo ha puesto por las nubes, hay un análisis en
                  concreto que ha llamado más la atención de los jugadores.
                </span>
              </span>
              <div class="blog-post-card2-container2">
                <div class="blog-post-card2-profile">
                  <img alt="cargando"
                    src="https://yt3.googleusercontent.com/BeUQBw1MHN0OJbr237LtUIW_EcwbZ5qrfNDpkuc0U5kA5CX5AOEkH1v4hWPkW5Mpe5aYQXiLR6E=s900-c-k-c0x00ffffff-no-rj"
                    class="blog-post-card2-image1" />
                  <span class="blog-post-card2-text4">
                    <span>3Djuegos.com</span>
                  </span>
                </div>
                <span class="blog-post-card2-text5">Leer mas -&gt;</span>
              </div>
            </div>
          </div>
        </a>
        </div>
        <div class="blog-post-card2-blog-post-card blog-post-card2-root-class-name2">
          <a href="https://www.xataka.com/videojuegos/polemica-torno-a-starfield-han-tenido-efecto-habitual-industria-review-bombing"
            target="_blank" rel="noreferrer noopener" class="principal-link">
          <img alt="image"
            src="https://images.ctfassets.net/rporu91m20dc/ogHOS3AYOs5PWOlqEMe6J/32e1bb02f0b3a60f464d0f227add03fb/starfield-launch-hero-mobile.png?h=502&amp;w=960"
            image_src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDd8fHBvcnRyYWl0fGVufDB8fHx8MTYyNjM3ODk3Mg&amp;ixlib=rb-1.2.1&amp;h=1000"
            class="blog-post-card2-image" />
          <div class="blog-post-card2-container">
            <div class="blog-post-card2-container1">
              <span class="blog-post-card2-text"><span>CRITICA</span></span>
              <span class="blog-post-card2-text1">
                <span>hace 1 semana</span>
              </span>
            </div>
            <h1 class="blog-post-card2-text2">
              <span>Duras criticas a Stardfield</span>
            </h1>
            <span class="blog-post-card2-text3">
              <span>
                'Starfield' no ha recibido una consideración masivamente
                positiva por parte de la crítica, pero en términos generales
                ha sido un juego bien valorado. Sin embargo, el contraste
                entre las notas de la crítica y de los usuarios es muy dispar:
                en Metacritic encontramos 87 y 5'6 respectivamente en la
                versión de PC, y 85 y 64 en la versión de consola. Algo más
                equilibradas parecen en Steam.
              </span>
            </span>
            <div class="blog-post-card2-container2">
              <div class="blog-post-card2-profile">
                <img alt="cargando"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwuJXwBjfiaEYpnbB18iDzPCeEu8SSbhoh-egwhYHJw&amp;s"
                  class="blog-post-card2-image1" />
                <span class="blog-post-card2-text4">
                  <span>Xakata.com</span>
                </span>
              </div>
              <span class="blog-post-card2-text5">Leer mas -&gt;</span>
            </div>
          </div>
          </a>
        </div>
      </div>

      <!-- CHATBOT-->
      <div class="principal-div-top-juegos">
        <h1 class="principal-titulo-juegos">
          <!-- SPAN DE MENU JUEGOS 1 -->
          <h1 id="principal-text062" class="principal-text062">Descubre tu juego ideal con nuestro ChatBot</h1>
        </h1>
        <div id="ChatBot_FYG" class="col-md-7">
          <div class="chat_window">
            <div class="top_menu">
              <div class="title">Encuentra tu juego</div>
            </div>
            <!-- render -->
            <ul class="messages">
              <li class="message left appeared">

              </li>
            </ul>
            <p id="question"></p>
            <div id="options"></div>


            <!-- input PARA INICIARKKKK-->
            <div class="bottom_wrapper">
              <input id="msg_input" placeholder="Para iniciar el chat di hola :D">
              <div id="send_button" class="app_button_1">Enviar</div>

            </div>

          </div>
        </div>
      </div>



      <div class="principal-stats">
        <div class="principal-stat">
          <h1 class="principal-text082">4</h1>
          <span class="principal-text083">Desarrolladores</span>
          <span class="principal-text084">
            Estudiantes de ingenieria de sistemas
          </span>
        </div>
        <div class="principal-stat1">
          <h1 class="principal-text085">50</h1>
          <span class="principal-text086">Juegos recomendables</span>
          <span class="principal-text087">
            Por ahora ese es nuestro limite de catalogo de juegos
          </span>
        </div>
        <div class="principal-stat2">
          <h1 class="principal-text088">
            <span>100</span>
            <span>+</span>
          </h1>
          <span class="principal-text091">Horas de desarrollo</span>
          <span class="principal-text092">
            Mas de 100 horas de DESARROLLO
          </span>
        </div>
        <div class="principal-stat3">
          <h1 class="principal-text093">45%</h1>
          <span class="principal-text094">Avance</span>
          <span class="principal-text095">
            45% en la tercera presentacion
          </span>
        </div>
      </div>
      <div class="principal-banner">
        <span class="principal-text096">
          SI DESEA MAS INFORMACION SOBRE EL DESARROLLO DE ESTE PROYECTO
        </span>
        <h1 class="principal-text097">Contactanos</h1>
        <span class="principal-text098">
          <span>
            <span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non
              volutpat turpis.
            </span>
            <span></span>
          </span>
          <span>
            <span>
              Mauris luctus rutrum mi ut rhoncus. Integer in dignissim tortor.
            </span>
            <span></span>
          </span>
        </span>
        <div class="principal-container31">
          <input type="text" placeholder="Aquí pon tu email" class="principal-textinput input" />
          <button class="principal-button2 button">Enviar</button>
        </div>
      </div>

      <!-- SEGUNDA PARTE -->



      
      

      <!-- FOOTER V2 ECG -->
      <footer class="principal-footer">
        <div class="principal-container32">
          <nav class="principal-nav">
            <span class="principal-text105"><a href="misjuegos.html">Mis juegos</a></span>
            <span class="principal-text106"><a href="Trends.html">Trends</a></span>
            <span class="principal-text107"><a href="Nosotros.html">Nosotros</a></span>
            <span class="principal-text108"><a href="about.html">Informacion</a></span>
            <span class="principal-text109"><a href="Blog.html">Blog</a></span>
          </nav>
        </div>
        <div class="principal-separator1"></div>
        <div class="principal-container33">
          <span class="principal-text110">© 2023 Find Your Game</span>
          <div class="principal-icon-group">
            <svg
              viewBox="0 0 950.8571428571428 1024"
              class="principal-icon09"
            >
              <path
                d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
              ></path></svg><svg
              viewBox="0 0 877.7142857142857 1024"
              class="principal-icon11"
            >
              <path
                d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
              ></path></svg><svg
              viewBox="0 0 602.2582857142856 1024"
              class="principal-icon13"
            >
              <path
                d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
              ></path>
            </svg>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
  </script>


  <script src="http://unpkg.com/scrollreveal"></script>
  <script src="apis/apiGPT.js"></script>
</body>

</html>