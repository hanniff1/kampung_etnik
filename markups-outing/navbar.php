<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/navbar.css" />

    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <header>
        <div class="logo">KAMPOENG ETNIK</div>
        <input type="checkbox" id="nav_check" hidden />
        <nav>
            <ul>
                <li style="list-style: none;">
                    <a href="" class="active">Home</a>
                </li>
                <li style="list-style: none;">
                    <a href="">About</a>
                </li>
                <li style="list-style: none;">
                    <a href="">Spot</a>
                </li>
                <li style="list-style: none;">
                    <a href="">Ticket</a>
                </li>
                <li style="list-style: none;">
                    <a href="">Contact </a>
                </li>
                <li style="list-style: none;">
                    <a href="" class="login">Login </a>
                </li>
                <li style="list-style: none;">
                    <a href="" class="login">Registrasi</a>
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
           <img src="img/depankKE.jpg" alt="" class="image" />
           <div class="image-data">
             <span class="text">Enjoy the finest coffee drinks.</span>
             <h2>
               Enjoy Our Exclusive <br />
               Coffee and Cocktails
             </h2>
             <a href="#" class="button">About Us</a>
           </div>
         </div>
         <div class="slide swiper-slide">
           <img src="img/idk.jpg" alt="" class="image" />
           <div class="image-data">
             <span class="text">We really like what we do.</span>
             <h2>
               Coffee Beans with a <br />
               Perfect Aroma
             </h2>
             <a href="#" class="button">About Us</a>
           </div>
         </div>
         <div class="slide swiper-slide">
           <img src="img/y.jpg" alt="" class="image" />
           <div class="image-data">
             <span class="text">Making Our coffee with lover.</span>
             <h2>
               Alluring and Fragrant <br />
               Coffee Aroma
             </h2>
             <a href="#" class="button">About Us</a>
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
  </body>
</html>
</body>

</html>