<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debugging: Print all POST data
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $kodeVilla = $_POST['kode_villa'] ?? '';
    $tanggalKunjungan = $_POST['tanggal_kunjungan'] ?? '';
    $hargaVilla = $_POST['harga_villa'] ?? 0;

    // Validasi: Pastikan nilai yang diperlukan tidak kosong
    if (!empty($kodeVilla) && !empty($tanggalKunjungan) && !empty($hargaVilla)) {
        $query = "INSERT INTO pemesanan_villa (kodeVilla, tanggalKunjungan, hargaVilla) VALUES ('$kodeVilla', '$tanggalKunjungan', '$hargaVilla')";
        if (mysqli_query($conn, $query)) {
            echo "Pemesanan villa berhasil!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Data tidak lengkap!";
    }
}
?>