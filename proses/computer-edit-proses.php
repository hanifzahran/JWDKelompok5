<?php
include'../koneksi.php';

$id_computer=$_POST['id_computer'];
$jenis_computer=$_POST['jenis_computer'];
$kategori=$_POST['kategori'];
$pemilik=$_POST['pemilik'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbcomputer
		SET jeniscomputer='$jenis_computer',kategori='$kategori',pemilik='$pemilik'
		WHERE idcomputer='$id_computer'"
	);
	header("location:../index.php?p=computer");
}
?>