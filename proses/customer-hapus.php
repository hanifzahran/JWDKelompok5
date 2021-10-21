<?php
include'../koneksi.php';
$id_customer=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbcustomer
	WHERE idcustomer='$id_customer'"
);
header("location:../index.php?p=customer");
?>