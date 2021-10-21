<?php
include'../koneksi.php';
$id_computer=$_POST['id_computer'];
$jenis_computer=$_POST['jenis_computer'];
$kategori=$_POST['kategori'];
$pemilik=$_POST['pemilik'];
$status="Tersedia";
	
if(isset($_POST['simpan'])){
	$sql =
		"INSERT INTO tbcomputer
		VALUES('$id_computer','$jenis_computer','$kategori','$pemilik','$status')";
		$query = mysqli_query($db, $sql);
	header("location:../index.php?p=computer");
}
?>