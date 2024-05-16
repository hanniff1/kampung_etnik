<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaLengkap = $_POST['nama_lengkap'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $noTelepon = $_POST['no_telepon'] ?? '';
    $email = $_POST['email'] ?? '';
    $jenisKelamin = $_POST['jenis_kelamin'] ?? '';
    $paketWahana = $_POST['paket_wahana'] ?? '';
    $tanggalKunjungan = $_POST['tanggal_kunjungan'] ?? '';
    $jumlahPengunjung = $_POST['jumlah_pengunjung'] ?? 0;
    $totalHarga = $_POST['total_harga_wahana'] ?? 0;

    // Debugging: Print all POST data to check if they are received correctly
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // Pastikan nilai yang diperlukan tidak kosong
    if ($namaLengkap && $alamat && $noTelepon && $email && $jenisKelamin && $paketWahana && $tanggalKunjungan && $jumlahPengunjung > 0 && $totalHarga > 0) {
        $query = "INSERT INTO pemesanan_wahana (namaLengkap, alamat, noTelepon, email, jenisKelamin, paketWahana, tanggalKunjungan, jumlahPengunjung, totalHarga) VALUES ('$namaLengkap', '$alamat', '$noTelepon', '$email', '$jenisKelamin', '$paketWahana', '$tanggalKunjungan', '$jumlahPengunjung', '$totalHarga')";
        if (mysqli_query($conn, $query)) {
            echo "Pemesanan berhasil!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Data tidak lengkap!";
    }
}
?>