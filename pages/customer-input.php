<div id="label-page">
	<h3>Input Data Customer</h3>
</div>
<div id="content">
	<form action="proses/customer-input-proses.php" method="post">
		<table id="tabel-input">
			<tr>
				<td class="label-formulir">ID customer</td>
				<?php
				
				include 'koneksi.php';
				$query = mysqli_query($db, "SELECT max(idcustomer) as lastid FROM tbcustomer");
				$data = mysqli_fetch_array($query);
				$kode = $data['lastid'];

				$urutan = (int) substr($kode, 3, 3);

				$urutan++;

				$huruf = "PC";
				$kode = $huruf . sprintf("%03s", $urutan);
				?>

				<td class="isian-formulir"><input type="text" name="id_customer" value="<?php echo $kode ?>" class="isian-formulir isian-formulir-border" required readonly></td>
			</tr>
			<tr>
				<td class="label-formulir">Nama</td>
				<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border" required></td>
			</tr>
			<tr>
				<td class="label-formulir">Jenis Kelamin</td>
				<td class="isian-formulir">
					<select name="jenis_kelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label-formulir">Alamat</td>
				<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea></td>
			</tr>
			<tr>
				<td class="label-formulir"></td>
				<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
			</tr>
		</table>
	</form>
</div>