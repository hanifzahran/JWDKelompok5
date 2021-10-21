<?php
	$id_computer=$_GET['id'];
	$q_tampil_computer=mysqli_query($db,"SELECT * FROM tbcomputer WHERE idcomputer='$id_computer'");
	$r_tampil_computer=mysqli_fetch_array($q_tampil_computer);

?>
<div id="label-page"><h3>Edit Data Komputer</h3></div>
<div id="content">
	<form action="proses/computer-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Komputer</td>
			<td class="isian-formulir"><input type="text" name="id_computer" value="<?php echo $r_tampil_computer['idcomputer']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Komputer</td>
			<td class="isian-formulir"><input type="text" name="jenis_computer" value="<?php echo $r_tampil_computer['judulcomputer']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><input type="text" name="kategori" value="<?php echo $r_tampil_computer['kategori']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Pemilik</td>
			<td class="isian-formulir"><input type="text" name="pemilik" value="<?php echo $r_tampil_computer['pemilik']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>