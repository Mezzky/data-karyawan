<?php 
require 'config.php';

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
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
</head>
<body>
    <h1>Tambah Karyawan Makodevz</h1>

<form action="" method="POST">
    <table border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td>Tambah Karyawan</td>
        </tr>
        <tr>
            <td><label for="username">Nama </label></td>
            <td>:</td>
            <td><input type="text" name="username" id="username" required="return confirm('Ini harus diisi');"><td>
        </tr>
        <tr>
            <td><label for="umur">Umur </label></td>
            <td>:</td>
            <td><input type="text" name="umur" id="umur" required="return confirm('Ini harus diisi');"><td>
        </tr>
        <tr>
            <td><label for="pekerjaan">Pekerjaan </label></td>
            <td>:</td>
            <td><input type="text" name="pekerjaan" id="pekerjaan" required="return confirm('Ini harus diisi');"><td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Tambah!</button></td>
        </tr>
    </table>
</form>
</body>
</html>