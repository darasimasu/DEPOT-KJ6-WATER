<?php
session_start();

// Fungsi untuk mendapatkan nilai count yang lama
function getOldCountUtang() {
    return isset($_SESSION['old_count_utang']) ? $_SESSION['old_count_utang'] : 0;
}

// Hubungkan ke database
$servername_utang = "localhost";
$username_utang = "root";
$password_utang = "";
$dbname_utang = "database1";

$conn_utang = new mysqli($servername_utang, $username_utang, $password_utang, $dbname_utang);

// Periksa koneksi
if ($conn_utang->connect_error) {
    die("Koneksi Gagal: " . $conn_utang->connect_error);
}

// Periksa apakah ada data di-POST ke tabel daftar_utang
$sql_utang = "SELECT COUNT(*) as count_utang FROM daftar_utang";
$result_utang = $conn_utang->query($sql_utang);

if ($result_utang->num_rows > 0) {
    $row_utang = $result_utang->fetch_assoc();
    $jumlah_utang_terbaru = $row_utang["count_utang"];

    // Dapatkan nilai count yang lama
    $jumlah_utang_lama = getOldCountUtang();

    // Jika count lama < count terbaru, kirim ke frontend
    if ($jumlah_utang_lama < $jumlah_utang_terbaru) {
        // Simpan count terbaru sebagai count lama
        $_SESSION['old_count_utang'] = $jumlah_utang_terbaru;

        // Mengembalikan respons JSON
        $response_utang = array("count_utang" => $jumlah_utang_terbaru);
        echo json_encode($response_utang);
    }
}

// Tutup koneksi
$conn_utang->close();
?>
