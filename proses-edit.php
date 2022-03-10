<?php

include ('koneksi.php');



$id_tiket = $_POST['id_tiket'];
$jenis_tiket = $_POST['jenis_tiket'];
$harga_tiket = $_POST['harga_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];

$edit = "UPDATE tiket_stadion SET jenis_tiket = '$jenis_tiket', harga_tiket = '$harga_tiket', jumlah_tiket = '$jumlah_tiket' WHERE id_tiket = '$id_tiket' ";


if (mysqli_query($koneksi, $edit)) {

	header('Location: list.php');
} else {
	echo "Gagal menyimpan perubahan ...";
}


?>