<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <h2>Data Pemesanan Tiket Wahana</h2>
    <table border="1">
        <tr>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Paket Wahana</th>
            <th>Tanggal Kunjungan</th>
            <th>Jumlah Pengunjung</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'db.php';

        // Hapus data
        if (isset($_GET['hapus_wahana'])) {
            $id = $_GET['hapus_wahana'];
            $delete_query = "DELETE FROM pemesanan_wahana WHERE id=$id";
            mysqli_query($conn, $delete_query);
        }

        // Tampilkan data dari pemesanan_wahana
        $result = mysqli_query($conn, "SELECT * FROM pemesanan_wahana");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['namaLengkap'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['noTelepon'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['jenisKelamin'] . "</td>";
            echo "<td>" . $row['paketWahana'] . "</td>";
            echo "<td>" . $row['tanggalKunjungan'] . "</td>";
            echo "<td>" . $row['jumlahPengunjung'] . "</td>";
            echo "<td>" . $row['totalHarga'] . "</td>";
            echo "<td>
                <a href='admin.php?edit_wahana=" . $row['id'] . "'>Edit</a> |
                <a href='admin.php?hapus_wahana=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Data Pemesanan Villa</h2>
    <table border="1">
        <tr>
            <th>Kode Villa</th>
            <th>Tanggal Kunjungan</th>
            <th>Harga Villa</th>
            <th>Aksi</th>
        </tr>
        <?php

        // Hapus data
        if (isset($_GET['hapus_villa'])) {
            $id = $_GET['hapus_villa'];
            $delete_query = "DELETE FROM pemesanan_villa WHERE id=$id";
            mysqli_query($conn, $delete_query);
        }

        // Tampilkan data dari pemesanan_villa
        $result = mysqli_query($conn, "SELECT * FROM pemesanan_villa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['kodeVilla'] . "</td>";
            echo "<td>" . $row['tanggalKunjungan'] . "</td>";
            echo "<td>" . $row['hargaVilla'] . "</td>";
            echo "<td>
                <a href='admin.php?edit_villa=" . $row['id'] . "'>Edit</a> |
                <a href='admin.php?hapus_villa=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    // Formulir pengubahan data pemesanan wahana
    if (isset($_GET['edit_wahana'])) {
        $id = $_GET['edit_wahana'];
        $result = mysqli_query($conn, "SELECT * FROM pemesanan_wahana WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
    ?>
    <h2>Ubah Data Pemesanan Wahana</h2>
    <form action="admin.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" value="<?= $row['namaLengkap'] ?>" required><br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= $row['alamat'] ?>" required><br>
        <label for="no_telepon">No Telepon:</label>
        <input type="text" name="no_telepon" value="<?= $row['noTelepon'] ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" value="<?= $row['jenisKelamin'] ?>" required><br>
        <label for="paket_wahana">Paket Wahana:</label>
        <input type="text" name="paket_wahana" value="<?= $row['paketWahana'] ?>" required><br>
        <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
        <input type="date" name="tanggal_kunjungan" value="<?= $row['tanggalKunjungan'] ?>" required><br>
        <label for="jumlah_pengunjung">Jumlah Pengunjung:</label>
        <input type="number" name="jumlah_pengunjung" value="<?= $row['jumlahPengunjung'] ?>" required><br>
        <label for="total_harga">Total Harga:</label>
        <input type="number" name="total_harga" value="<?= $row['totalHarga'] ?>" required><br>
        <input type="submit" name="update_wahana" value="Ubah Data">
    </form>
    <?php
    }

    // Proses pengubahan data pemesanan wahana
    if (isset($_POST['update_wahana'])) {
        $id = $_POST['id'];
        $namaLengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $noTelepon = $_POST['no_telepon'];
        $email = $_POST['email'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $paketWahana = $_POST['paket_wahana'];
        $tanggalKunjungan = $_POST['tanggal_kunjungan'];
        $jumlahPengunjung = $_POST['jumlah_pengunjung'];
        $totalHarga = $_POST['total_harga'];

        $update_query = "UPDATE pemesanan_wahana SET 
                        namaLengkap='$namaLengkap', 
                        alamat='$alamat', 
                        noTelepon='$noTelepon', 
                        email='$email', 
                        jenisKelamin='$jenisKelamin', 
                        paketWahana='$paketWahana', 
                        tanggalKunjungan='$tanggalKunjungan', 
                        jumlahPengunjung='$jumlahPengunjung', 
                        totalHarga='$totalHarga' 
                        WHERE id=$id";

        if (mysqli_query($conn, $update_query)) {
            echo "<p>Data berhasil diubah!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }

    // Formulir pengubahan data pemesanan villa
    if (isset($_GET['edit_villa'])) {
        $id = $_GET['edit_villa'];
        $result = mysqli_query($conn, "SELECT * FROM pemesanan_villa WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
    ?>
    <h2>Ubah Data Pemesanan Villa</h2>
    <form action="admin.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label for="kode_villa">Kode Villa:</label>
        <input type="text" name="kode_villa" value="<?= $row['kodeVilla'] ?>" required><br>
        <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
        <input type="date" name="tanggal_kunjungan" value="<?= $row['tanggalKunjungan'] ?>" required><br>
        <label for="harga_villa">Harga Villa:</label>
        <input type="number" name="harga_villa" value="<?= $row['hargaVilla'] ?>" required><br>
        <input type="submit" name="update_villa" value="Ubah Data">
    </form>
    <?php
    }

    // Proses pengubahan data pemesanan villa
    if (isset($_POST['update_villa'])) {
        $id = $_POST['id'];
        $kodeVilla = $_POST['kode_villa'];
        $tanggalKunjungan = $_POST['tanggal_kunjungan'];
        $hargaVilla = $_POST['harga_villa'];

        $update_query = "UPDATE pemesanan_villa SET 
                        kodeVilla='$kodeVilla', 
                        tanggalKunjungan='$tanggalKunjungan', 
                        hargaVilla='$hargaVilla' 
                        WHERE id=$id";

        if (mysqli_query($conn, $update_query)) {
            echo "<p>Data berhasil diubah!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>

</html>