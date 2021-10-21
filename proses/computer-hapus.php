<?php
include'../koneksi.php';
$id_computer=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbcomputer
	WHERE idcomputer='$id_computer'"
);
header("location:../index.php?p=computer");
?>