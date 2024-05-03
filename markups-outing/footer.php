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
      background: #343434;
      padding-top: 50px;
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
      color: white;
      font-size: 25px;
    }
    a {
      text-decoration: none;
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
      color: #343434;
      margin: 0;
      font-size: 16px;
      padding: 7px;
    }
  </style>
  <body>
    <footer>
      <div class="container">
        <div class="footer-content">
          <h3>Contact Us</h3>
          <p>Email:WonkkUnik@gmail.com</p>
          <br />
          <p>Phone:088218897635</p>
          <br />
          <p>Email:Address:Your address 123 street</p>
        </div>
        <div class="footer-content">
          <h3>Quic Links</h3>
          <ul class="list">
            <li><a href="">Home</a></li>
            <li><a href="">Aboute</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Produck</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="footer-content">
          <h3>Follow Us</h3>
          <ul class="social-icons">
            <li>
              <a href=""><i class="fab fa-facebook"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-youtube"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a>
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