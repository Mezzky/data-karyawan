<?php
require 'config.php';

$id = $_GET["id"];

$kyn = query("SELECT * FROM karyawan WHERE id = $id")[0];


if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Berhasil Mengubah Karyawan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal Mengubah Karyawan!');
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
        <header>Ubah Karyawan Makodevz</header>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $kyn["id"]; ?>">
            <!-- <label for="username">Nama</label> -->
            <input type="text" value="<?= $kyn["nama"]; ?>" name="username" id="username">

            <!-- <label for="umur">Umur</label> -->
            <input type="text" value="<?= $kyn["umur"]; ?>" name="umur" id="umur">

            <!-- <label for="pekerjaan">Pekerjaan</label> -->
            <input type="text" value="<?= $kyn["pekerjaan"]; ?>" name="pekerjaan" id="pekerjaan">
            <div class="kosong"></div>
            <button class="tambah" type="submit" name="submit">Ubah!</button>
        </form>
    </section>
</body>

</html>
