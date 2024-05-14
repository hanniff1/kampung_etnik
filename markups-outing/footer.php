<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <script
      src="https://kit.fontawesome.com/1165876da6.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      color: white;
      
    } 
    footer {
      margin: top 45px;
      color: white;
      background: #309af;
      padding-top: 50px;
      background-image: linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);
    }

    .container {
      width: 1140px;
      margin: auto;
      display: flex;
      justify-content: center;
    }
    .footer-content {
      width: 33.3%;
    }
    h3 {
      font-size: 28px;
      margin-bottom: 15px;
      text-align: center;
    }
    .footer-content p {
      width: 190px;
      margin: auto;
      padding: 7px;
    }
    .footer-content ul {
      text-align: center;
    }
    
    .list {
      padding: 0;
    }
    .list a {
      color: black !important;
    }
    .list li {
      width: auto;
      text-align: center;
      list-style-type: none;
      padding: 7px;
      position: relative;
    }
    .list li::before {
      content: "";
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 100%;
      width: 0;
      height: 2px;
      background: #3084f1;
      transition-duration: 0.5s;
    }
    .list li:hover::before {
      width: 70px;
    }
    .social-icons {
      text-align: center;
      padding: 0;
    }
    .social-icons li {
      display: inline-block;
      text-align: center;
      padding: 5px;
      border: 1px solid rgb(0, 115, 255);
    }
    .social-icons i {
      color: black;
      font-size: 25px;
    }
    a {
      text-decoration: none;
    }
    h3{
      color: black;
    }
    h4{
      color: black;
    }
    a{
      color: black;
    }
    a:hover {
      color: #3084f1;
    }
    .social-icons i:hover {
      color: #f18930;
    }
    .bottom-bar {
      background: #309af1;
      text-align: center;
      padding: 10px 0;
      margin-top: 50px;
    }
    .bottom-bar p {
      /* color: #343434; */
      margin: 0;
      font-size: 16px;
      padding: 7px;
    }
  </style>
  <body>
    <footer id="container-footer">
      <div class="container">
        <div class="footer-content">
          <h3>Contact Us</h3>
          <p>Email: <a href="mailto:etnikkampoeng@gmail.com">etnikkampoeng@gmail.com</a></p>
          <br />
          <p>Phone: <a href="https://wa.me/6281572234000">081572234000</a></p>
          <br />
          <p>Address: Legok Lor, Kec. Pejagoan, Kab. Kebumen, Jawa Tengah.</p>
        </div>
        <div class="footer-content">
          <h3>Quic Links</h3>
          <ul class="list">
            <li><a href="home.php">Home</a></li>
            <li><a href="mu-about">About</a></li>
            <li><a href="#mu-featured-tours">Spot</a></li>
            <li><a href="pesann.php">Ticket</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="footer-content">
          <h3>Follow Us</h3>
          <ul class="social-icons">
            <li>
              <a href="https://www.facebook.com/kampoengetnik.kebumen?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
              <a href="https://www.tiktok.com/@kampoeng.etnik.ke?_t=8mAV3EF7BmC&_r=1"><i class="fab fa-tiktok"></i></a>
            </li>
            <li>
              <a href="https://www.instagram.com/kampoeng_etnik_kebumen?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="bottom-bar">
        <p>&copy; 2024 WonkkUnik</p>
      </div>
    </footer>
  </body>
</html>
