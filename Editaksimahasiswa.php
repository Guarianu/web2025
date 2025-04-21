<?php

include "koneksi.php";

$nim = $_POST['nim'];   
$nama = $_POST['nama']; 
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_telpn = $_POST['no_telpn'];
$email = $_POST['email'];
$id_prodi = $_POST['id_prodi'];

$query = "UPDATE mahasiswa SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', no_telpn = '$no_telpn', email = '$email', id_prodi = '$id_prodi' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");

?>