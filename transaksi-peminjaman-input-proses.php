<?php
include '../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_customer=$_POST['id_customer'];
$id_computer=$_POST['id_computer'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_customer="Sedang Meminjam";
$status_computer="Dipinjam";


if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_customer','$id_computer','$tgl_pinjam','')"
	);
	mysqli_query($db,
		"UPDATE tbcustomer
		SET status='$status_customer'
		WHERE idcustomer='$id_customer'"
	);
	mysqli_query($db,
		"UPDATE tbcomputer
		SET status='$status_computer'
		WHERE idcomputer='$id_computer'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>