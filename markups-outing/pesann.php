<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/pesan.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <title>Pesan</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: #fff;
    }

    .wrapper {
        width: 500px;
        margin: auto;
        padding: 20px;
        background: #352e2e;
        margin-top: 20px;
    }

    h3 {
        color: black;
        padding: 10px;
        background: #35a9db;
        margin-bottom: 0px;
        text-align: center;
        border-radius: 5px;
    }

    table {
        width: 500px;
        color: #fff;
        border: 1px solid;
    }

    input[type="text"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
    }

    input[type="telp"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
    }

    input[type="email"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
    }

    input[type="date"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
    }

    select {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
    }

    input[type="submit"] {
        width: 30%;
        padding: 4px;
        border-radius: 5px;
        background: #35a9db;
        border: 1px solid green;
        font-size: 20px;
        font-weight: bold;
        margin: 10px 0;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-top: 30px;
    }
    </style>
</head>

<body>
<header>
      <div class="logo">Kampoeng Etnik</div>
      <input type="checkbox" id="nav_check" hidden />
      <nav>
        <ul>
          <li style="list-style: none">
            <a href="#" class="">Home</a>
          </li>
          <li style="list-style: none">
            <a href="#mu-about">About</a>
          </li>
          <li style="list-style: none">
            <a href="#mu-featured-tours">Spot</a>
          </li>
          <li style="list-style: none">
            <a href="">Ticket</a>
          </li>
          <li style="list-style: none">
            <a href="">Contact </a>
          </li>
          <li style="list-style: none">
            <a href="login-register" class="login">Sign-in </a>
          </li>
        </ul>
      </nav>
      <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </label>
    </header>
    <br>
    <h1>Pemesanan Wahana</h1>
    <table>
        <thead>
            <tr>
                <th>Paket</th>
                <th>Wahana</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    Kolam renang dan prosotan <br />
                    Mandi busa (Rombongan) <br />
                    Aquarium ikan Air Tawar dan Air Laut <br />
                    Dunia Reptil <br />
                    Museum Gamelan Jawa <br />
                    Museum Wayang <br />
                    Geopark Mini <br />
                    Terapi ikan Kesehatan <br />
                    Main Egrang <br />
                    Main Sepeda Mini <br />
                    Main becak mini <br />
                    Selfie masjid ka'bah <br />
                    Selfie bungalow <br />
                    Selfie waterpark <br />
                    selfie balon etnik
                </td>
                <td>
                    Weekday (Hari Senin-Hari Jumat) = 15.000 <br />
                    <br />
                    Weekend (Hari Sabtu-Hari Minggu) = 20.000
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Main sepeda bebek air</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Outbond flying fox</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Outbond sepeda gantung</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Trampolin</td>
                <td>5.000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sewa ban renang sepuasnya</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Sewa baju jawa</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kids zona sepuasnya</td>
                <td>20.000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5"></th>
            </tr>
        </tfoot>
    </table>
    <br>
    <br>

    <div class="wrapper">
        <h3>Pengunjung</h3>
        <form>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea cols="" rows=""></textarea>
                    </td>
                </tr>
                <tr>
                    <td>No telp</td>
                    <td>
                        <input type="telp" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>
                        <input type="email" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select>
                            <option></option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ID Wahana</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Paket Wahana</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Harga Paket</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td>
                        <form action="#">
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" />
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pengunjung</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <br>

    <h1>Pemesanan Villa</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipe</th>
                <th>Jumlah</th>
                <th>Weekday</th>
                <th>Weekend</th>
                <th>Kapasitas</th>
                <th>Room</th>
                <th>Sisa room</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1A</td>
                <td>DELIMA</td>
                <td>12</td>
                <td>250.000,00</td>
                <td>275.000,00</td>
                <td>Maksimal 2 orang</td>
                <td>D:1-12</td>
                <td>D:1-11</td>
            </tr>
            <tr>
                <td>2B</td>
                <td>ASEM</td>
                <td>3</td>
                <td>275.000,00</td>
                <td>300.000,00</td>
                <td>Maksimal 2 orang</td>
                <td>A:1-3</td>
                <td>A:1</td>
            </tr>
            <tr>
                <td>3C</td>
                <td>BRAMBANG</td>
                <td>4</td>
                <td>275.000,00</td>
                <td>300.000,00</td>
                <td>Maksimal 2 orang</td>
                <td>C:1-4</td>
                <td>C:3</td>
            </tr>
            <tr>
                <td>4D</td>
                <td>CIMPLUKAN</td>
                <td>3</td>
                <td>275.000,00</td>
                <td>300.000,00</td>
                <td>Maksimal 2 orang</td>
                <td>C:1-5</td>
                <td>C:5</td>
            </tr>
            <tr>
                <td>5E</td>
                <td>VIP(ASEM 2A-B)</td>
                <td>3</td>
                <td>300.000,00</td>
                <td>350.000,00</td>
                <td>Maksimal 4 orang</td>
                <td>A:3A,3B</td>
                <td>A:3A</td>
            </tr>
            <tr>
                <td>6F</td>
                <td>VIP DELIMA ATAS</td>
                <td>1</td>
                <td>350.000,00</td>
                <td>400.000,00</td>
                <td>Maksimal 4 orang</td>
                <td>VIP-D</td>
                <td>-</td>
            </tr>
            <tr>
                <td>7G</td>
                <td>YUDHISTIRA</td>
                <td>1</td>
                <td>600.000,00</td>
                <td>750.000,00</td>
                <td>Maksimal 6 orang</td>
                <td>Room Eksekutif Y</td>
                <td>-</td>
            </tr>
        </tbody><br>
        <br>

</body>

</html>