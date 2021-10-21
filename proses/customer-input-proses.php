<?php
include'../koneksi.php';
$id_customer=$_POST['id_customer'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbcustomer
		VALUES('$id_customer','$nama','$jenis_kelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=customer");
}
?>