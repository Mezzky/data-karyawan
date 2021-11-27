<?php 
$conn = mysqli_connect("Localhost", "root", "", "makomart");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["username"]);
    $umur = htmlspecialchars($data["umur"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);

    $query = "INSERT INTO karyawan VALUES('', '$nama', '$umur', '$pekerjaan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    $query = "DELETE FROM karyawan WHERE $id = id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>