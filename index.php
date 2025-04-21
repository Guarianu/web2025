<?php 
include 'koneksi.php';

$query = "SELECT m.*, p.nama namaprodi FROM mahasiswa m JOIN prodi p ON m.id_prodi = p.id";
$data = ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <a href="tambahmahasiswa.php">Tambah</a>
    <br>
    <table border="1" cellspacing="0" cellspacing="5">
        <thead>
            <th>No</th> 
            <th>Nim</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Namaprodi</th>
            <th>Aksi</th>
        </thead>
        <tbody>

        <?php
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["tanggal_lahir"] ?></td>
                <td><?php echo $d["no_telpn"] ?></td>
                <td><?php echo $d["email"] ?></td>
                <td><?php echo $d["namaprodi"] ?></td>
                <td><a href="editmahasiswa.php?nim=<?= $d['nim']; ?>">edit</a> | 
                 <a href="hapusmahasiswa.php?nim=<?= $d['nim']; ?>
                    "onclick="return confirm('yakin kada nyawa mehapus?')">hapus</a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
        </tbody>
    </table>
</body>
</html>
