<?php
	$id_customer=$_GET['id'];
	$q_tampil_customer=mysqli_query($db,"SELECT * FROM tbcustomer WHERE idcustomer='$id_customer'");
	$r_tampil_customer=mysqli_fetch_array($q_tampil_customer);
?>
<div id="label-page"><h3>Edit Data Customer</h3></div>
<div id="content">
	<form action="proses/customer-edit-proses.php" method="POST">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Customer</td>
			<td class="isian-formulir"><input type="text" name="id_customer" value="<?php echo $r_tampil_customer['idcustomer']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="name" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
		<td class="label-formulir">Jenis Kelamin</td>
				<td class="isian-formulir">
					<select name="jenis_kelamin" value="<?php echo $r_tampil_customer['jeniskelamin']; ?>">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_customer['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>