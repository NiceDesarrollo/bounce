/* Este metodo se asegura que haya cargado todo el html para poder manipular el js */
document.addEventListener("DOMContentLoaded", function () {
  //Carousel usando bootstrap
  var carousel = new bootstrap.Carousel(
    document.getElementById("carouselSectionPc")
  );

  // Evento que se dispara al cambiar de diapositiva en el carrusel
  carousel._element.addEventListener("slid.bs.carousel", function (event) {
    var currentSlide = event.to;
    // Actualizar la imagen en base a la diapositiva actual
    updateImage(currentSlide);
  });

  //Actualizar imagen
  function updateImage(slideIndex) {
    //Imagen que se va a cambiar en base al carousel
    var imageElement = document.getElementById("changingImage");

    // Cambiar la fuente de la imagen en función de la diapositiva actual
    switch (slideIndex) {
      case 0:
        imageElement.src = "./assets/images/cafeteria.webp";
        break;
      case 1:
        imageElement.src = "./assets/images/canchas.webp";
        break;
      case 2:
        imageElement.src = "./assets/images/vestidores.webp";
        break;
    }
  }

  var isMac = navigator.platform.toUpperCase().indexOf("MAC") >= 0;
  // Aplicar estilo específico si es macOS
  document.addEventListener("DOMContentLoaded", function () {
    if (isMac) {
      var buttonSendForm = document.getElementById("buttonSendForm");
      if (buttonSendForm) {
        buttonSendForm.style.paddingTop = "12px";
      }
    }
  });
});

//*Navegación
function toggleMenu() {
  var navbarRight = document.querySelector(".navbar-right");
  var hamburgerIcon = document.getElementById("hamburger-icon");

  //Añade o elimina la clase dependiendo si esta o no asignada
  navbarRight.classList.toggle("show-menu");
  hamburgerIcon.classList.toggle("x");

  // Cambiar el contenido del ícono
  if (hamburgerIcon.classList.contains("x")) {
    hamburgerIcon.innerHTML = "&#10005;"; // Código de caracter para "x"
  } else {
    hamburgerIcon.innerHTML = "&#9776;"; // Código de caracter para hamburguesa
  }

  //* Cerrar el menú después de hacer clic en una opción
  //Obtener todos los links hijos del padre navbar-right
  var menuLinks = document.querySelectorAll(".navbar-right a");
  //Iterar cada uno
  menuLinks.forEach(function (link) {
    //A la espera de un click
    link.addEventListener("click", function () {
      //acciones cuando den click en alguna de estas opciones
      //Remover la clase que muestra el menu
      navbarRight.classList.remove("show-menu");
      //Remover la clase que muestra el simbolo de x
      hamburgerIcon.classList.remove("x");
      // Restaurar el ícono de hamburguesa
      hamburgerIcon.innerHTML = "&#9776;";
    });
  });
}

//*Anumación de pelota
function handleClickBall(element) {
  element.classList.add("tennis-ball");

  // Agregar un retraso de 1 segundo
  setTimeout(function () {
    element.classList.remove("tennis-ball");
  }, 1000);
}

//*Animación del boton del modal de la galeria(previo)
let prevIcon = document.getElementById("prevIcon");
if (prevIcon) {
  //*Animación del boton del modal de la galeria
  prevIcon.addEventListener("click", function () {
    // Cambiar la escala al hacer clic
    this.style.transform = "scale(0.8)"; // Puedes ajustar el valor de escala según tus necesidades

    // Restablecer la escala después de un breve período (500 milisegundos en este ejemplo)
    setTimeout(function () {
      prevIcon.style.transform = "scale(1)";
    }, 500);
  });
}

//*Animación del boton del modal de la galeria(Siguiente)
let nextIcon = document.getElementById("nextIcon");
if (nextIcon) {
  nextIcon.addEventListener("click", function () {
    // Cambiar la escala al hacer clic
    this.style.transform = "scale(0.8)"; // Puedes ajustar el valor de escala según tus necesidades

    // Restablecer la escala después de un breve período (500 milisegundos en este ejemplo)
    setTimeout(function () {
      nextIcon.style.transform = "scale(1)";
    }, 500);
  });
}

function enableBtn() {
  document.getElementById("buttonSendForm").disabled = false;
}
