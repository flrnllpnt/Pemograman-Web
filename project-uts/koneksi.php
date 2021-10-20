<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "project-uts";

//Membuat koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

//Cek koneksi
if (!$conn) {
    die("Koneksi Gagal: ".mysqli_connect_error());
}

?>