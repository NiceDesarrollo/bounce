//* Aplicar estilo específico si es macOS
var isMac = navigator.platform.toUpperCase().indexOf("MAC") >= 0;

if (isMac) {

  //*Boton de reservar aqui 
  applyStyles(["reserve-here-hero-button"], {
    paddingTop: "20px",
  });


  applyStyles(["buttonSendForm", "buttonReservation", "bookNowText", "tournamentButton"], {
    paddingTop: "13px",
  });

  applyStyles(["reservation-now", "reservation-now-gallery", "navbar-hamburger"], {
    paddingTop: "10px",
  });

  applyStyles(
    [
      "whatsappIconAcademy",
      "whatsappIconAcademyMobile",
      "whatsappIconTournamentMobile",
    ],
    {
      paddingTop: "6px",
    }
  );
}

/**
 * Applies multiple styles to a list of elements.
 *
 * @param {Array} elementIds - An array of element IDs to which the styles will be applied.
 * ['id1','id2','id3',.....]
 * @param {Object} styles - An object where the keys are the style properties and the values are the style values.
 * {color: 'red', position: 'absoulute', ....}
 */
function applyStyles(elementIds, styles) {
  // Iterate over each element ID
  elementIds.forEach(function (id) {
    // Get the element by its ID
    var element = document.getElementById(id);
    // If the element exists
    if (element) {
      // Iterate over each style property in the styles object
      for (var styleProperty in styles) {
        // Apply the style to the element
        element.style[styleProperty] = styles[styleProperty];
      }
    }
  });
}

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

//*Animación de pelota
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
//**Deshabilitar el boton de envio del formulario */
function enableBtn() {
  // Obtén el botón por su ID
  var buttonSendForm = document.getElementById("buttonSendForm");
  // Habilita el botón
  buttonSendForm.disabled = false;
}
