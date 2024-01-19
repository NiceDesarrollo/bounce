#!/bin/bash
#Generar divs en un txt

for i in {0..25}; do
  echo '    <div class="image-carousel-galery carousel-item">' >> carousel.txt
  echo '      <img style="max-width: 100%; width: auto" class="d-block w-100" src="./assets/images/galery/'"${i}.webp"'" alt="" />' >> carousel.txt
  echo '    </div>' >> carousel.txt
done
