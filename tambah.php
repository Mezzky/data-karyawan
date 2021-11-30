<?php
require 'config.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Berhasil Menambah Karyawan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal Menambah Karyawan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>
    <section class="container">
        <header>Tambah Karyawan Makodevz</header>
        <form action="" method="POST">
            <!-- <label for="username">Nama</label> -->
            <input type="text" placeholder="Nama" name="username" id="username">

            <!-- <label for="umur">Umur</label> -->
            <input type="text" placeholder="Umur" name="umur" id="umur">

            <!-- <label for="pekerjaan">Pekerjaan</label> -->
            <input type="text" placeholder="Pekerjaan" name="pekerjaan" id="pekerjaan">
            <div class="kosong"></div>
            <button class="tambah" type="submit" name="submit">Tambah!</button>
        </form>
    </section>
</body>

</html>