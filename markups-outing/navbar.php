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
</body>

</html>