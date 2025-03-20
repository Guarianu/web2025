<?php 
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
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
    <br>
    <table border="1" cellspacing="0" cellspacing="5">
        <thead>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $data[0]['nim']; ?></td>
                <td><?= $data[0]['nama']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?= $data[1]['nim']; ?></td>
                <td><?= $data[1]['nama']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
