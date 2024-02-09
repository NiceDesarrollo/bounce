//* Este metodo se asegura que haya cargado todo el html para poder manipular el js */
document.addEventListener("DOMContentLoaded", function () {
    //*Carousel usando bootstrap
    var carousel = new bootstrap.Carousel(
      document.getElementById("carouselSectionPc")
    );
  
    //* Evento que se dispara al cambiar de diapositiva en el carrusel
    carousel._element.addEventListener("slid.bs.carousel", function (event) {
      var currentSlide = event.to;
      //* Actualizar la imagen en base a la diapositiva actual
      updateImage(currentSlide);
    });
  
    //*Actualizar imagen
    function updateImage(slideIndex) {
      //*Imagen que se va a cambiar en base al carousel
      var imageElement = document.getElementById("changingImage");
  
      //* Cambiar la fuente de la imagen en función de la diapositiva actual
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
        case 3:
          imageElement.src = "./assets/images/regaderas.webp";
          break;
        case 4:
          imageElement.src = "./assets/images/estacionamiento.webp";
          break;
      }
    }
  });