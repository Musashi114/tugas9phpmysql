<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "toko_online";

$mysqli = new mysqli($host, $username, $password, $database);

if($mysqli->connect_error){
    die("Koneksi Gagal");
}
//die("Koneksi Berhasil");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$sql = "INSERT INTO pelanggan (nama, alamat, telp) VALUES ('$nama', '$alamat', '$telp')";


if($mysqli->query($sql)){
    echo "data berhasil disimpan";
} else {
    echo "gagal disimpan";
}

echo "<br>";
echo "<a href=http://localhost/Sesi-9/>kembali</a>";
