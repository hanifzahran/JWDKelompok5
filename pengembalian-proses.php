<?php
include'../koneksi.php';


$tgl_kembali=date('Y-m-d');
$id_transaksi=$_GET['id'];
$q_transaksi=mysqli_query($db,
	"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'"
);
$r_transaksi=mysqli_fetch_array($q_transaksi);
$id_customer=$r_transaksi['idcustomer'];
$status_customer="Tidak Meminjam";
$id_computer=$r_transaksi['idcomputer'];
$status_computer="Tersedia";
	
if(isset($_GET['id'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET tglkembali='$tgl_kembali'
		WHERE idtransaksi='$id_transaksi'"
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