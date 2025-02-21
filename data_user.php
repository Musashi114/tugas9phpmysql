<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "toko_online";
$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_error){
    die("Koneksi Gagal");
}

$sql = "SELECT * FROM pelanggan";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['nama'] . '<br>';
        echo $row['alamat'] . '<br><br>';
    }
}

$mysqli->close();