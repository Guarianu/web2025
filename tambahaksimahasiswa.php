<?php

include "koneksi.php";

// var_dump($_POST);
// die;

$nim = $_POST['nim'];
$nama = $_POST['nama']; 
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_telpn = $_POST['no_telpn'];
$email = $_POST['email'];
$id_prodi = $_POST['id_prodi'];

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, no_telpn, email, id_prodi) VALUES('$nim', 
'$nama', '$tanggal_lahir', '$no_telpn', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");

?>