<?php
session_start();

// Fungsi untuk mendapatkan nilai count yang lama
function getOldCount() {
    return isset($_SESSION['old_count']) ? $_SESSION['old_count'] : 0;
}

// Hubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Periksa apakah ada data di-POST ke tabel daftar_pesanan
$sql = "SELECT COUNT(*) as count FROM daftar_pesanan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jumlah_pesanan_terbaru = $row["count"];

    // Dapatkan nilai count yang lama
    $jumlah_pesanan_lama = getOldCount();

    // Jika count lama < count terbaru, kirim ke frontend
    if ($jumlah_pesanan_lama < $jumlah_pesanan_terbaru) {
        // Simpan count terbaru sebagai count lama
        $_SESSION['old_count'] = $jumlah_pesanan_terbaru;

        // Mengembalikan respons JSON
        $response = array("count" => $jumlah_pesanan_terbaru);
        echo json_encode($response);
    }
}

// Tutup koneksi
$conn->close();
?>
