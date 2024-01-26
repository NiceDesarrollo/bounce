<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head class="header">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <!-- SEO TAGS -->
  <meta name="description" content="PADEL" />
  <meta name="keywords" content="Deporte, Padel," />
  <meta name="author" content="Nice" />
  <meta http-equiv="content-language" content="es" />
  <meta name="robots" content="index" />
  <link rel="canonical" href="https://nicedesarrollo.github.io/bounce" />
  <meta property="og:title" content="Bounce padel" />
  <meta property="og:description" content="Descripción" />
  <meta property="og:image" content="./assets/Bounce_Blanco.png" />
  <meta property="og:url" content="https://nicedesarrollo.github.io/bounce" />

  <!-- Estilos -->
  <link rel="stylesheet" href="./styles.css" />
  <!-- FavIcon -->
  <link rel="icon" type="image/x-icon" href="./assets/SVG/Asset 6.svg" />
  <!-- Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- recaptcha script -->
  <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>

  <!-- Titulo del tab -->
  <title>bounce</title>
</head>

<body style="background-color: black">
  <!-- header -->
  <header>
    <!-- Título oculto para lectores de pantalla -->
    <h1 class="sr-only">Bounce Padel</h1>

    <!-- hero mobile -->
    <div class="bg-image hero-image-background d-md-none">
      <!-- Navegación-->
      <nav class="navigation py-3">
        <a href="index.php" class="navbar-logo">
          <img src="./assets/Bounce_Blanco.png" alt="Logo pounce padel" loading="lazy" />
        </a>
        <div class="navbar-hamburger" onclick="toggleMenu()">
          <span style="color: white" id="hamburger-icon">&#9776;</span>
        </div>
        <div class="navbar-right text-center">
          <a href="#whoWeAre">¿Quiénes somos?</a>

          <!-- Enlace a carousel de instalaciones (Mobile) -->
          <a href="#carouselSectionMobile" class="d-lg-none">Instalaciones</a>

          <!-- Enlace a carousel de instalaciones (PC) -->
          <a href="#installationsPC" class="d-none d-lg-inline">Instalaciones</a>

          <a href="#services">Servicios</a>
          <a href="#shop">Tienda</a>
          <a href="#contact">Contactanos</a>
          <a href="#ubication">Ubicacion</a>
          <a href="galery.html">Galeria</a>
        </div>
      </nav>

      <!-- centrado del icono -->
      <div class="center-icon" data-bs-toggle="modal" data-bs-target="#videoModal">
        <img src="./assets/SVG/Asset 9.svg" alt="Play video SVG" />
      </div>

      <!-- Modal -->
      <div style="margin-top: 60px" class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <!-- Contenido del modal -->
        <div class="modal-dialog modal-lg pt-4" role="document">
          <div class="modal-content text-light" style="background-color: #0f1f0fe9">
            <div class="modal-header">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              <!-- Embed del video de YouTube -->
              <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/M2_in0-IU2k?si=2TZB7RIt2BuLWyJ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- hero desktop -->
    <div class="hero-desktop-loading hero-image-background-desktop d-none d-md-block">
      <!-- Navegación-->
      <nav class="navigation py-3">
        <a href="index.php" class="navbar-logo">
          <img src="./assets/Bounce_Blanco.png" alt="Logo pounce padel" loading="lazy" />
        </a>
        <div class="navbar-hamburger" onclick="toggleMenu()">
          <span style="color: white" id="hamburger-icon">&#9776;</span>
        </div>
        <div class="navbar-right text-center">
          <a href="#whoWeAre">¿Quiénes somos?</a>

          <!-- Enlace a carousel de instalaciones (Mobile) -->
          <a href="#carouselSectionMobile" class="d-lg-none">Instalaciones</a>

          <!-- Enlace a carousel de instalaciones (PC) -->
          <a href="#installationsPC" class="d-none d-lg-inline">Instalaciones</a>

          <a href="#services">Servicios</a>
          <a href="#shop">Tienda</a>
          <a href="#contact">Contactanos</a>
          <a href="#ubication">Ubicacion</a>
          <a href="galery.html">Galeria</a>
        </div>
      </nav>

      <video autoplay muted loop>
        <source src="//vimeo-hp-videos.global.ssl.fastly.net/3/3.mp4" type="video/mp4" />
        Tu navegador no soporta el elemento de video.
      </video>
    </div>
  </header>

  <!-- Contenido principal -->
  <main>
    <!-- Quienes somos -->
    <section>
      <div id="whoWeAre" class="bg-image who-we-are-image-background">
        <div class="row">
          <div class="col-md-6 text-center text-white mt-md-5 mt-5">
            <h2 class="mt-5 mt-md-5">¿Quiénes somos?</h2>
            <img class="mt-3" width="300" src="./assets/Bounce_Blanco.png" alt="Logo Bounce" loading="lazy" />

            <!-- Mobile text -->
            <p class="mt-5 d-lg-none" style="padding-right: 55px; padding-left: 55px">
              En Bounce Padel, estamos comprometidos con la creación de una
              comunidad apasionada por el deporte, que comparte nuestra
              devoción por el juego y que disfruta de un partido con amigos
              como parte de su actividad física diaria. Fundada en el corazón
              de la ciudad, nos enorgullece ofrecer un espacio donde jugadores
              de todos los niveles pueden sentirse en casa, aprender,
              ejercitarse, disfrutar en familia o con amigos y socializar.
            </p>

            <!-- pc text -->
            <p class="mt-5 justify-text text-desktop" style="padding-right: 55px; padding-left: 55px">
              En Bounce Padel, estamos comprometidos con la creación de una
              comunidad apasionada por el deporte, que comparte nuestra
              devoción por el juego y que disfruta de un partido con amigos
              como parte de su actividad física diaria. Fundada en el corazón
              de la ciudad, nos enorgullece ofrecer un espacio donde jugadores
              de todos los niveles pueden sentirse en casa, aprender,
              ejercitarse, disfrutar en familia o con amigos y socializar.
            </p>

            <!-- Imagen de la pelota amarilla -->
            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" onclick="handleClickBall(this)" loading="lazy" style="cursor: pointer" />
          </div>
          <div class="col-md-6 text-center text-white pr-3"></div>
        </div>
      </div>
    </section>

    <!-- Instalaciones (pc) -->
    <section>
      <div id="installationsPC" class="bg-image installations-image-background d-none d-md-block">
        <div class="row h-100">
          <div class="col-md-5 p-3" style="max-height: 100%">
            <!-- Imagen que cambiará -->
            <img id="changingImage" src="./assets/images/cafeteria.webp" alt="Imagen 1" class="img-fluid changingImage rounded shadow" />
          </div>

          <!-- Lado derecho del carousel -->
          <div class="col-md-7 text-center text-white mt-md-5" style="padding-right: 10px">
            <!-- Titulo del carousel -->
            <h2 class="mt-3 mt-md-5">Instalaciones</h2>

            <!-- Carousel -->
            <div id="carouselSectionPc" class="carousel slide my-5" data-bs-ride="carousel">
              <div class="carousel-inner">
                <!-- carousel item active -->
                <div class="carousel-item active">
                  <div class="text-center">
                    <h3 class="my-5">Caféteria</h3>
                    <p class="mt-1 justify-text" style="padding-right: 60px; padding-left: 60px">
                      En el corazón de Bounce Padel, encontrarás Cafeto
                      Snack&Bar, un lugar para relajarse y compartir momentos
                      después del juego. Te ofrecemos diferentes snacks, desde
                      desayunos saludables hasta comidas botaneras y bebidas
                      para disfrutar después de un partido de pádel. Ya sea
                      para celebrar una victoria o reflexionar sobre un
                      partido, nuestra cafetería es el lugar perfecto para
                      conectar con otros amantes del pádel.
                    </p>
                  </div>
                </div>

                <!-- carousel item -->
                <div class="carousel-item">
                  <div class="text-center">
                    <h3 class="my-5">Canchas</h3>
                    <p class="mt-1 justify-text" style="padding-right: 60px; padding-left: 60px">
                      Nuestras pistas están construidas con materiales de alta
                      calidad, proporcionando una superficie perfecta para el
                      juego. Cada cancha está diseñada con una superficie que
                      brinda un equilibrio perfecto entre agarre y
                      deslizamiento, garantizando un juego dinámico. Además,
                      puedes jugar en cualquier momento del día gracias a la
                      iluminación de última generación en nuestras canchas,
                      proporcionando visibilidad y ambiente para partidos
                      nocturnos.
                    </p>
                  </div>
                </div>

                <!-- carousel item -->
                <div class="carousel-item">
                  <div class="text-center">
                    <h3 class="my-5">Vestidores</h3>
                    <p class="mt-1 justify-text" style="padding-right: 60px; padding-left: 60px">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Explicabo facilis a labore officiis pariatur ipsam
                      perferendis necessitatibus dolorem deserunt enim. Iusto
                      eum, minima reprehenderit porro eligendi mollitia illo!
                      Vel, illum.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Botones del carousel -->

              <!-- Previo -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselSectionPc" data-bs-slide="prev" style="
                    padding-right: 50px !important;
                    padding-top: 80px !important;
                  ">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <!-- Siguiente -->
              <button class="carousel-control-next" type="button" data-bs-target="#carouselSectionPc" data-bs-slide="next" style="
                    padding-left: 50px !important;
                    padding-top: 80px !important;
                  ">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" onclick="handleClickBall(this)" style="cursor: pointer" />
          </div>
        </div>
      </div>
    </section>

    <!-- Instalaciones (mobile) -->
    <section>
      <div id="carouselSectionMobile" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- carousel item active-->
          <div class="mobile carousel-item active">
            <img src="./assets/images/cafeteria.webp" class="d-block w-100 h-100" alt="Cafeteria" />
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center pt-5">
              <div class="mt-5">
                <h5 class="mb-4 mt-5">Cafeteria</h5>
                <p>
                  En el corazón de Bounce Padel, encontrarás Cafeto Snack&Bar,
                  un lugar para relajarse y compartir momentos después del
                  juego. Te ofrecemos diferentes snacks, desde desayunos
                  saludables hasta comidas botaneras y bebidas para disfrutar
                  después de un partido de pádel. Ya sea para celebrar una
                  victoria o reflexionar sobre un partido, nuestra cafetería
                  es el lugar perfecto para conectar con otros amantes del
                  pádel.
                </p>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="mobile carousel-item">
            <img src="./assets/images/canchas.webp" class="d-block w-100 h-100" alt="Cafeteria" />
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
              <div class="text-card-container">
                <h5 class="mb-4 mt-5">Canchas</h5>
                <p>
                  Nuestras pistas están construidas con materiales de alta
                  calidad, proporcionando una superficie perfecta para el
                  juego. Cada cancha está diseñada con una superficie que
                  brinda un equilibrio perfecto entre agarre y deslizamiento,
                  garantizando un juego dinámico. Además, puedes jugar en
                  cualquier momento del día gracias a la iluminación de última
                  generación en nuestras canchas, proporcionando visibilidad y
                  ambiente para partidos nocturnos.
                </p>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="mobile carousel-item">
            <img src="./assets/images/vestidores.webp" class="d-block w-100 h-100" alt="Cafeteria" />
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
              <div>
                <h5 class="mb-4 mt-5">Vestidores</h5>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Cum, unde impedit delectus placeat recusandae suscipit,
                  assumenda iusto sapiente officiis autem ad facere deserunt.
                  Aut enim sit magnam ut officiis doloribus!
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Botones del carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSectionMobile" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSectionMobile" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <!-- Servicios -->
    <section>
      <div id="services" class="bg-image services-image-background">
        <div class="row">
          <div class="col-md-6 text-center text-white mt-md-5 mt-5">
            <h2 class="mt-md-5 mt-5">Servicios</h2>
            <h3 class="mt-5">Renta de canchas</h3>
            <p class="mt-5">Precios:</p>
            <p>2 horas: $1,000</p>
            <p>4 horas: $1,500</p>
            <p>8 horas: $3,000</p>
            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" onclick="handleClickBall(this)" class="mt-3" style="cursor: pointer" />
          </div>
          <div class="col-md-6 text-center text-white pr-3"></div>
        </div>
      </div>
    </section>

    <!-- Tienda -->
    <section>
      <div id="shop" class="bg-image shop-image-background">
        <div class="row">
          <div class="col-md-6 text-center text-white pr-3"></div>
          <div class="col-md-6 text-center text-white mt-md-5 mt-5">
            <h2 class="mt-5 mt-md-5">Tienda</h2>
            <h3 class="mt-5">Venta de articulos deportivos</h3>
            <!-- Mobile text -->
            <p class="mt-5 d-lg-none" style="padding-right: 55px; padding-left: 55px">
              Contamos con una tienda especializada en artículos deportivos de
              Pádel.
            </p>
            <!-- pc text -->
            <p class="mt-5 justify-text text-desktop" style="padding-right: 55px; padding-left: 55px">
              Contamos con una tienda especializada en artículos deportivos de
              Pádel.
            </p>

            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" onclick="handleClickBall(this)" class="mt-3" style="cursor: pointer" />
          </div>
        </div>
      </div>
    </section>

    <!-- Contacto -->
    <section>
      <div id="contact" class="bg-image contact-image-background">
        <div class="row">
          <div class="mt-5"></div>
          <!-- Formulario de contacto -->
          <div class="col-md-6 text-white d-flex flex-column align-items-center mt-md-5 mt-5">

            <?php
            //* Verifica si hay un error de reCAPTCHA
            if (isset($_SESSION['error_recaptcha']) && $_SESSION['error_recaptcha']) :
            ?>

              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
              </svg>

              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                  <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div class="pt-2 px-2">
                  Hubo un problema con el recaptcha
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <!-- Cargar el script unicamente cuando se cumpla la condicion -->
              <script>
                //Desaparecer la alerta despues de 5 segundos
                setTimeout(function() {
                  var alert = document.querySelector(".alert");
                  alert.classList.add("fade");
                  alert.addEventListener("transitionend", function() {
                    alert.remove();
                  });
                }, 5000);
              </script>

            <?php
              // Limpia la variable de sesión para que no se muestre el modal en futuras visitas
              unset($_SESSION['error_recaptcha']);
            endif;
            ?>

            <?php
            // Verifica si el captcha fue exitoso
            if (isset($_SESSION['success_recaptcha']) && $_SESSION['success_recaptcha']) :
            ?>
              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
              </svg>

              <div class="alert alert-success d-flex align-items-center mt-2" role="alert" id="successAlert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                  <use xlink:href="#check-circle-fill" />
                </svg>
                <div class="pt-2 px-2">
                  Correo enviado exitosamente
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <!-- Cargar el script unicamente cuando se cumpla la condicion -->
              <script>
                //Desaparecer la alerta despues de 5 segundos
                setTimeout(function() {
                  var alert = document.querySelector(".alert");
                  alert.classList.add("fade");
                  alert.addEventListener("transitionend", function() {
                    alert.remove();
                  });
                }, 5000);
              </script>

            <?php
              // Limpia la variable de sesión para que no se muestre el modal en futuras visitas
              unset($_SESSION['success_recaptcha']);
            endif;
            ?>


            <!-- Titulo de contacto -->
            <h2 class="mt-5 mt-md-5 text-center">Contacto</h2>

            <!-- Contenido del formulario -->
            <form action="form.php" method="POST" class="w-75">
              <!-- Input nombre -->
              <div class="form-group">
                <label for="nameInput">Nombre</label>
                <input style="padding-top: 15px" required type="text" class="form-control black-input" id="nameInput" aria-describedby="nameInput" name="name" oninvalid="this.setCustomValidity('Introduce tu nombre')" oninput="setCustomValidity('')" />
              </div>

              <!-- Input correo y celular -->
              <div class="row mt-3">
                <div class="col">
                  <div class="form-group">
                    <label for="emailInput">Correo</label>
                    <input style="padding-top: 15px" required type="email" class="form-control black-input" id="emailInput" name="email" oninvalid="this.setCustomValidity('Introduce tu correo')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="phoneInput">Celular</label>
                    <input style="padding-top: 15px" required type="text" class="form-control black-input" id="phoneInput" name="phone" oninvalid="this.setCustomValidity('Introduce tu numero celular')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>

              <!-- Input Mensaje -->
              <div class="form-group mt-3">
                <label for="messageInput">Mensaje</label>
                <textarea style="padding-top: 15px" class="form-control black-input" id="messageInput" rows="2" name="message"></textarea>
              </div>

              <!-- Recaptcha -->
              <div class="g-recaptcha mt-4" data-sitekey="6LeqmFspAAAAAHrADuvHzFH8uR3P_jpffd-GKx_R" data-theme="dark" data-callback="enableBtn"></div>

              <!-- Boton de enviar -->
              <div class="mt-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-sm button-form pb-0 px-3" style="padding: 10px" value="submit" id="buttonSendForm" disabled="disabled">
                  ENVIAR
                </button>
              </div>
            </form>

            <!-- Icono de pelota -->
            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" onclick="handleClickBall(this)" class="mt-3" style="cursor: pointer" />
          </div>

          <div class="col-md-6"></div>
        </div>
      </div>
    </section>

    <section>
      <!-- Ubicacion -->
      <div id="ubication" class="bg-image ubication-image-background">
        <div class="row">
          <div class="col-md-6"></div>

          <div class="col-md-6 text-white mt-5 text-center ubication-col">
            <!-- Titulo de ubicacion -->
            <h2 class="mt-5 mt-md-5 mb-5">Ubicacion</h2>
            <!-- Columnas de ubicacion -->
            <div class="row">
              <!-- columna de mapa -->
              <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14928.131144997715!2d-103.3884277!3d20.7088932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af9adbe382ef%3A0xa6dce60723948567!2sBounce%20Padel!5e0!3m2!1sen!2smx!4v1705102925272!5m2!1sen!2smx" class="container" style="border-radius: 25px" allowfullscreen="" loading="lazy" height="250px" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <!-- Columna de direccion -->
              <div class="col-4">
                <span class="fw-bold">Direccion:</span>
                <p>
                  Calle alberta 2230
                  <br />
                  Colomos Providencia
                  <br />
                  44660
                  <br />
                  Guadalajara Jalisco
                </p>
                <span class="fw-bold">Telefono:</span>
                <p>(+52) 332 255 6714</p>
                <span class="fw-bold">Correo:</span>
                <p>info@padel.com.mx</p>
              </div>
              <!-- columna de redes sociales -->
              <div class="col-2">
                <a href="#" class="custom-link">
                  <i class="fa-brands fa-instagram fa-2xl my-4"></i>
                </a>
                <br />
                <a href="#" class="custom-link">
                  <i class="fa-brands fa-facebook fa-2xl my-5"></i>
                </a>
                <br />
                <a href="#" class="custom-link">
                  <i class="fa-brands fa-youtube fa-2xl mt-5"></i>
                </a>
              </div>
            </div>

            <img height="30" width="30" src="./assets/SVG/Asset 6.svg" alt="Icono de pelota de tenis" class="mt-4" onclick="handleClickBall(this)" style="cursor: pointer" />
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section>
      <footer class="bg-black">
        <div class="row px-4">
          <!-- footer logo -->
          <div class="col-lg-3 my-3 footer-image-container">
            <img class="footer-image" src="./assets/Bounce_Blanco.png" alt="Logo pounce padel" />
          </div>
          <!-- Menu footer -->
          <div class="col-lg-6 text-center text-white mt-5 d-flex flex-wrap justify-content-space-between navbar-footer">
            <a href="#whoWeAre" class="flex-grow-1">¿Quiénes somos?</a>

            <!-- Enlace a carousel de instalaciones (Mobile) -->
            <a href="#carouselSectionMobile" class="flex-grow-1 d-md-block d-lg-none">Instalaciones</a>

            <!-- Enlace a carousel de instalaciones (PC) -->
            <a href="#installationsPC" class="flex-grow-1 d-none d-lg-block">Instalaciones</a>

            <a href="#services" class="flex-grow-1">Servicios</a>
            <a href="#shop" class="flex-grow-1">Tienda</a>
            <a href="#contact" class="flex-grow-1">Contactanos</a>
            <a href="#ubication" class="flex-grow-1">Ubicacion</a>
            <a href="galery.html">Galeria</a>
          </div>

          <!-- Redes sociales Iconos -->
          <div class="col-lg-3 text-center my-5">
            <a href="#" class="custom-link icon-footer">
              <i class="fa-brands fa-instagram fa-2xl"></i>
            </a>
            <a href="#" class="custom-link icon-footer">
              <i class="fa-brands fa-facebook fa-2xl"></i>
            </a>
            <a href="#" class="custom-link">
              <i class="fa-brands fa-youtube fa-2xl"></i>
            </a>
          </div>

          <p class="text-center" style="color: #bababa">
            <span class="padel-color">Bounce PADEL</span> &copy; - Todos los
            derechos reservados - 2023
          </p>
        </div>
      </footer>
    </section>
  </main>

  <!-- Script de bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Font awesome link -->
  <script src="https://kit.fontawesome.com/3a2bbc5bd5.js" crossorigin="anonymous"></script>

  <!-- Código javascript -->
  <script src="app.js"></script>
</body>

</html>