<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.html");
}
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="Editaksimahasiswa.php" method="POST">
        <table>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim" value="<?= $datamahasiswa[0]['nim'] ?>" readonly></td>
            </tr>

            <tr>
                <td>nama</td>   
                <td><input type="text" name="nama" value="<?= $datamahasiswa[0]['nama'] ?>"></td>
            </tr>

            <tr>
                <td>tanggal lahir</td> 
                <td><input type="date" name="tanggal_lahir"value="<?= $datamahasiswa[0]['tanggal_lahir'] ?>"></td>
            </tr>

            <tr>
                <td>no telpn</td>
                <td><input type="text" name="no_telpn"value ="<?= $datamahasiswa[0]['no_telpn'] ?>"></td>
            </tr>

            <tr>
                <td>email</td>
                <td>
                    <input type="text" name="email"value ="<?= $datamahasiswa[0]['email'] ?>"></td>
            </tr>

            <tr>
                <td>prodi</td> 
                <td>
                    <select name="id_prodi">
                        <?php foreach ($data as $d) : ?>
                            <option value="<?= $d['id'] ?>"
                                <?= $d['id'] == $datamahasiswa[0]['id_prodi'] ? 
                                "selected" : "" ?>
                            
                            ><?= $d['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Tambah</button></td>
            </tr>

            <tr>    
                <td></td>
                <td><a href="index.php">Kembali</a></td>
            </tr>

        </table>
    </form>

</body>
</html>