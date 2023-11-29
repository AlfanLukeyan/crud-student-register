<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "calon_siswa";
$port = 3306;

// Load connection ke DB
$conn = new mysqli($host, $user, $password, $database, $port);


// Cek koneksi DB
if( $conn->connect_error){
    die("Koneksi ke DB gagal : " . $conn->connect_error);
}

// Membuat DB jika belum ada
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sqlCreateDB) === TRUE) {
    # code...
    // echo "Database berhasil dibuat atau sudah ada.<br>";
} else {
    # code...
    die("Gagal membuat DB : " . $conn->error);
}

// Menggunakan database yang baru atau sudah ada
$conn->select_db($database);

// Membuat tabel calon_siswa jika belum ada
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS calon_siswa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    jenis_kelamin VARCHAR(50) NOT NULL,
    agama VARCHAR(50) NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL
)";

if ($conn->query($sqlCreateTable) === TRUE) {
    # code...
    // echo "Tabel calon_siswa berhasil dibuat / sudah ada<br>";
} else {
    # code...
    die("Gagal membuat tabel : " . $conn->error);
}
?>