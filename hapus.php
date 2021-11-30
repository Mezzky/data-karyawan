<?php 
require 'config.php';

$id = $_GET["id"];
    if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Berhasil Memecat Karyawan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
    echo "
        <script>
            alert('Gagal Memecat Karyawan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
?>