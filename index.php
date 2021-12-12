<?php 
require 'config.php';

$karyawan = query("SELECT * FROM karyawan");

if( isset($_POST["cari"]) ) {
    $karyawan = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/3075c43df2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Makodevz</h1>

    </header>

<div class="container">
        <a class="tambah" href="tambah.php">Tambah Karyawan <i class="fas fa-plus-circle"></i></a>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="Search.." autocomplete="off">
        <button type="submit" name="cari">Search!</button>
    </form>
    <br><br>
        <table>
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
                <td class="nomer"><?= $i; ?></td>
                <td class="nama"><?= $kyn["nama"]; ?></td>
                <td class="umur"><?= $kyn["umur"]; ?></td>
                <td class="kerja"><?= $kyn["pekerjaan"]; ?></td>
                <td class="hapus">
                    <a class="pecat" href="hapus.php?id=<?= $kyn["id"]; ?>" onclick="return confirm('Yakin Ingin Dipecat?')">Pecat <i class="fas fa-minus-square"></i></a> |
                    <a class="pecat" href="ubah.php?id=<?= $kyn["id"]; ?>">Usir <i class="fas fa-minus-square"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
