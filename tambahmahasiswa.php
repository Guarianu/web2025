<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="tambahaksimahasiswa.php" method="POST">
        <table>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>

            <tr>
                <td>nama</td>   
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>tanggal lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>

            <tr>
                <td>no telpn</td>
                <td><input type="text" name="no_telpn"></td>
            </tr>

            <tr>
                <td>email</td>
                <td>
                    <input type="text" name="email"></td>
            </tr>

            <tr>
                <td>prodi</td> 
                <td>
                    <select name="id_prodi">
                        <?php foreach ($data as $d) : ?>
                            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
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