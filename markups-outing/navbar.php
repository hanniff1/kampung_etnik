<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->

    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <header>
        <div class="logo">Kampoeng Etnik</div>
        <input type="checkbox" id="nav_check" hidden />
        <nav>
            <ul>
                <li style="list-style: none;">
                    <a href="#" class="">Home</a>
                </li>
                <li style="list-style: none;">
                    <a href="#mu-about">About</a>
                </li>
                <li style="list-style: none;">
                    <a href="#mu-featured-tours">Spot</a>
                </li>
                <li style="list-style: none;">
                    <a href="">Ticket</a>
                </li>
                <li style="list-style: none;">
                    <a href="">Contact </a>
                </li>
                <li style="list-style: none;">
                    <a href="login-register" class="login">Login </a>
                </li>
                <li style="list-style: none;">
                    <a href="login-register/registration.php" class="register">Registrasi</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    <!-- IMAGE SLIDE -->
    <!-- Link Swiper's CSS -->

    <!-- Swiper JS -->
    <script src="css/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>

    <!-- IMAGE SLIDE -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    </head>

    <body>
        <section class="main swiper mySwiper">
            <div class="wrapper swiper-wrapper">
                <div class="slide swiper-slide">
                    <img src="assets/images/depankKE.jpg" alt="" class="image" />
                    <div class="image-data">
                        <span class="text"></span>
                        <h2>
                            Selamat Datang <br />
                            di Website Kampoeng Etnik
                        </h2>
                        <a href="#" class="button">About Us</a>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="assets/images/idk.jpg" alt="" class="image" />
                    <div class="image-data">
                        <span class="text"></span>
                        <h2>
                            Berbagai Macam Wahana <br />
                            Yang Seru dan Menyenangkan
                        </h2>
                        <a href="#" class="button">About Us</a>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="assets/images/y.jpg" alt="" class="image" />
                    <div class="image-data">
                        <span class="text"></span>
                        <h2>
                            Bunga Low <br />
                            Penginapan Yang Nyaman
                        </h2>
                        <a href="mu-about" class="button">About Us</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </section>


        <!-- Swiper JS -->
        <script src="JS/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        let slideIndex = 1;
        showSlides(slideIndex);
        // <script>
        //   // Next/previous controls
        //   function plusSlides(n) {
        //   showSlides(slideIndex += n);
        //   }

        //   // Thumbnail image controls
        //   function currentSlide(n) {
        //   showSlides(slideIndex = n);
        //   }

        //   function showSlides(n) {
        // let i;
        // let slides = document.getElementsByClassName("mySlides");
        // let dots = document.getElementsByClassName("dot");
        // if (n > slides.length) {slideIndex = 1}
        // if (n < 1) {slideIndex = slides.length}
        // for (i = 0; i < slides.length; i++) {
        //   slides[i].style.display = "none";
        // }
        // for (i = 0; i < dots.length; i++) {
        //   dots[i].className = dots[i].className.replace(" active", "");
        // }
        // slides[slideIndex-1].style.display = "block";
        // dots[slideIndex-1].className += " active";
        // }
        //  
        </script>
        <!-- END IMAGE SLIDE -->
        <!-- ABOUT AND IMAGE -->
        <!-- <div class="about">
      <div class="container">
        <div class="box-about">
          <div class="box">
            <img src="img/depankKE.jpg" alt="">
          </div>
          <div class="box">
            <h1>Apartreak</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas odit inventore id mollitia, necessitatibus, veritatis nesciunt ratione nulla dicta eaque ullam, culpa provident animi. Sapiente impedit animi officiis delectus similique!</p>
            <button>Selengkapnya</button>
          </div>
        </div>
      </div>
    </div> -->
        <!-- END ABOUT AND IMAGE -->
        <!-- <script>

    let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
  showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  }
</script> -->

    </body>

</html>
</body>

</html>