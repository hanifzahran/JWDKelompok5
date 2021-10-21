<?php
include '../koneksi.php';

$id_customer=$_POST['id_customer'];
$nama=$_POST['name'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbcustomer
		SET nama='$nama',jeniskelamin='$jenis_kelamin',alamat='$alamat'
		WHERE idcustomer='$id_customer'"
	);
	header("location:../index.php?p=customer");
}
?>

<!-- SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a INNER JOIN tbtransaksi b on a.idanggota = b.idanggota


SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a 
INNER JOIN tbtransaksi b on a.idanggota = b.idanggota
INNER JOIN tbbuku c on c.idbuku = b.idbuku -->