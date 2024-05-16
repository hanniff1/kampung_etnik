<?php

include("../pesan/cobapemesananlagi/db.php");
$nama_lengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];
$no_telepon = $_POST["no_telepon"];
$email = $_POST["email"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$paket_wahana = $_POST["paket_wahana"];
$harga_wahana = $_POST["harga_wahana"];
$tanggal_kunjungan = $_POST["tanggal_kunjungan"];
$jumlah_pengunjung = $_POST["jumlah_pengunjung"];
$total_harga_wahana = $_POST["total_harga_wahana"];


$query = "INSERT INTO pemesanan_wahana (nama_lengkap, alamat, no_telepon, email, jenis_kelamin, paket_wahana, harga_wahana, tanggal_kunjungan, jumlah_pengunjung, total_harga_wahana) VALUES ('$nama_lengkap', '$alamat', '$no_telepon', '$email', '$jenis_kelamin', '$paket_wahana', '$harga_wahana', '$tanggal_kunjungan', '$jumlah_pengunjung', '$total_harga_wahana')";


// var_dump($_POST);
?>


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

    
    </style>
    
</head>

<body>
<header>
      <div class="logo">Kampoeng Etnik</div>
      <input type="checkbox" id="nav_check" hidden />
      <nav>
        <ul>
          <li style="list-style: none">
            <a href="../markups-outing/home.php" class="">Home</a>
          </li>
          <li style="list-style: none">
            <a href="#mu-about">About</a>
          </li>
          <li style="list-style: none">
            <a href="#mu-featured-tours">Spot</a>
          </li>
          <li style="list-style: none">
            <a href="#">Ticket</a>
          </li>
          <li style="list-style: none">
            <a href="">Contact </a>
          </li>
          <!-- <li style="list-style: none">
            <a href="login-register" class="login">Sign-in </a>
          </li> -->
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
    <br>
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
                <td>KD01</td>
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
                <td>KD02</td>
                <td>Main sepeda bebek air</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>KD03</td>
                <td>Outbond flying fox</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>KD04</td>
                <td>Outbond sepeda gantung</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>KD05</td>
                <td>Trampolin</td>
                <td>5.000</td>
            </tr>
            <tr>
                <td>KD06</td>
                <td>Sewa ban renang sepuasnya</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>KD07</td>
                <td>Sewa baju jawa</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>KD08</td>
                <td>Kids zona sepuasnya</td>
                <td>20.000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5"></th>
        </tfoot>
    </table>
    <br>
    <br>
<?php
    include('../pesan/cobapemesananlagi/index.php');
?>
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
                        <textarea cols="" rows="" name=""></textarea>
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
                    
                    <td><label for="paketWahana">Pilih Paket Wahana:</label></td>
                    <td>
                    <select id="paketWahana" onchange="updateHarga()">
                            <option value="">--Pilih Paket--</option>
                            <option value="Paket1">1</option>
                            <option value="Paket2">2</option>
                            <option value="Paket3">3</option>
                            <option value="Paket4">4</option>
                            <option value="Paket5">5</option>
                            <option value="Paket6">6</option>
                            <option value="Paket7">7</option>
                            <option value="Paket8">8</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Harga:</td>
                    <td> <span id="harga">Pilih paket wahana</span></td>
                </tr>
                <!-- <tr>
                    <td>ID Villa</td>
                    <td>
                    <select>
                            <option></option>
                            <option>1A</option>
                            <option>2B</option>
                            <option>3C</option>
                            <option>4D</option>
                            <option>5E</option>
                            <option>6F</option>
                            <option>7G</option>
                        </select>
                    </td>
                </tr> -->
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
                
               
                    <!-- <td colspan="3">
                        <input type="submit" name="" value="Selanjutnya">
                    </td> -->
                </table>
        </form>
        <button class= "btn-selengkapnya" type="submit">Selanjutnya</button>

    </div>
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
    </table>
    </br>
    <div class="wrapper">
        <h3>Tiket Villa</h3>
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
                        <textarea cols="" rows="" name=""></textarea>
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
                <!-- <tr>
                    <td>Paket Wahana</td>
                    <td>
                    <select>
                            <option></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>ID Villa</td>
                    <td>
                    <select>
                            <option></option>
                            <option>1A</option>
                            <option>2B</option>
                            <option>3C</option>
                            <option>4D</option>
                            <option>5E</option>
                            <option>6F</option>
                            <option>7G</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td>
                        <form action="#">
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" />
                        </form>
                    </td>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>
                        <input type="text" name="" />
                    </td>
                </tr>
            </table>
        </form>
        <button class= "btn-selengkapnya" type="submit">Selanjutnya</button>
    </div>
</div>
<script>
      function updateHarga() {
        var paketWahana = document.getElementById("paketWahana");
        var harga = document.getElementById("harga");
        var selectedOption = paketWahana.options[paketWahana.selectedIndex].value;

        // Harga untuk setiap paket wahana
        var hargaPaket = {
          Paket1: "Rp 20.000",
          Paket2: "Rp 10.000",
          Paket3: "Rp 10.000",
          Paket4: "Rp 10.000",
          Paket5: "Rp 5.000",
          Paket6: "Rp 10.000",
          Paket7: "Rp 15.000",
          Paket8: "Rp 20.000",
        };

        // Perbarui elemen harga
        harga.textContent = hargaPaket[selectedOption] || "Pilih paket wahana";
      }
    </script>
</body>


</html>