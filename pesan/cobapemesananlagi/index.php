



<!DOCTYPE html>
<html>
  <head>
    <title>Pemesanan Tiket Wahana</title>
    <link rel="stylesheet" href="wahana.css" />
    <script>
      function showHargaWahana() {
        var paket = document.getElementById("paket_wahana").value;
        var harga;
        switch (paket) {
          case "Paket A":
            harga = 20000;
            break;
          case "Paket B":
            harga = 10000;
            break;
          case "Paket C":
            harga = 10000;
            break;
          case "Paket D":
            harga = 100000;
            break;
          case "Paket E":
            harga = 5000;
            break;
          case "Paket F":
            harga = 10000;
            break;
          case "Paket G":
            harga = 15000;
            break;
          case "Paket H":
            harga = 20000;
            break;
          default:
            harga = 0;
        }
        document.getElementById("harga_wahana").innerText = harga;
        document.getElementById("harga_wahana_input").value = harga;
        showTotalHargaWahana();
      }

      function showTotalHargaWahana() {
        var harga = parseInt(document.getElementById("harga_wahana").innerText);
        var jumlahPengunjung = parseInt(document.getElementById("jumlah_pengunjung").value);
        var totalHarga = harga * jumlahPengunjung;
        document.getElementById("total_harga_wahana").innerText = totalHarga;
        document.getElementById("total_harga_wahana_input").value = totalHarga;
      }
    </script>
  </head>
  <body>
    <h2>Pemesanan Tiket Wahana</h2>
    <form action="pesann.php" method="post">
      Nama Lengkap: <input type="text" name="nama_lengkap" required /><br />
      Alamat: <input type="text" name="alamat" required /><br />
      No Telepon: <input type="text" name="no_telepon" required /><br />
      Alamat Email: <input type="email" name="email" required /><br />
      Jenis Kelamin:
      <select name="jenis_kelamin" required>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option></select
      ><br />
      Pilih Paket Wahana:
      <select name="paket_wahana" id="paket_wahana" onchange="showHargaWahana()" required>
        <option value="">-- Pilih Paket --</option>
        <option value="Paket A">KD01</option>
        <option value="Paket B">KD02</option>
        <option value="Paket C">KD03</option>
        <option value="Paket D">KD04</option>
        <option value="Paket E">KD05</option>
        <option value="Paket F">KD06</option>
        <option value="Paket G">KD07</option>
        <option value="Paket H">KD08</option></select
      ><br />
      Harga: <span id="harga_wahana">0</span><br />
      <input type="hidden" id="harga_wahana_input" name="harga_wahana" value="0" />
      Tanggal Kunjungan: <input type="date" name="tanggal_kunjungan" required /><br />
      Jumlah Pengunjung: <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" onchange="showTotalHargaWahana()" required /><br />
      Total Harga: <span id="total_harga_wahana">0</span><br />
      <input type="hidden" id="total_harga_wahana_input" name="total_harga_wahana" value="0" />
      <input type="submit" value="Pesan" />
    </form>
  </body>
</html>
