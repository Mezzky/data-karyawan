<?php 
require 'config.php';

$karyawan = query("SELECT * FROM karyawan");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
</head>
<body>
    <h1>Makodevz</h1>

<a href="tambah.php">Tambah Karyawan</a>


    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Umur</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $karyawan as $kyn ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $kyn["nama"]; ?></td>
            <td><?= $kyn["umur"]; ?></td>
            <td><?= $kyn["pekerjaan"]; ?></td>
            <td>
                <a href="hapus.php?id=<?= $kyn["id"]; ?>" onclick="return confirm('Yakin Ingin Dipecat?')">Pecat</a> 
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>