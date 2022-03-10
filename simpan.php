<?php

$id_tiket = $_POST['id_tiket'];
$jenis_tiket = $_POST['jenis_tiket'];
$harga_tiket = $_POST['harga_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];

include 'koneksi.php';

$sql = "INSERT INTO tiket_stadion VALUES ('$id_tiket', '$jenis_tiket', '$harga_tiket', '$jumlah_tiket')";

if(mysqli_query($koneksi, $sql)) {
    echo "Data Berhasil Disimpan";
    echo "a<href='index.php'>Isi Lagi</a>" . "<br>";
    echo "a<href='list.php'>lihat</a>";

} else{
    echo "errpr" . $sql . "<br>" . mysqli_error($koneksi);
    
}


?>