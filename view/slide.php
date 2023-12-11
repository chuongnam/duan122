<!DOCTYPE html>
<html>
  <head>
    <style>
      .slideshow {
        position: relative;
        width: 100%;
        height: 700px;
        margin: auto;
        overflow: hidden;
      }

      .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
      }

      .slide.active {
        opacity: 1;
      }
      .slide img{
          width: 100%;

      }
    </style>
  </head>
  <body>
    <div class="slideshow">
      <img class="slide active" src="image/anh6.jpg" alt="Slide 1">
      <img class="slide" src="image/anh3.jpg" alt="Slide 2">
      <img class="slide" src="image/anh4.jpg" alt="Slide 3">
      <img class="slide" src="image/anh5.jpg" alt="Slide 4">
      <img class="slide" src="image/anh2.jpg" alt="Slide 5">
    </div>

    <script>
      var slides = document.getElementsByClassName('slide');
      var currentSlide = 0;

      function nextSlide() {
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].className = 'slide active';
      }

      setInterval(nextSlide, 3000);
    </script>
  </body>
</html>