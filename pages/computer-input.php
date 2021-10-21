<div id="label-page"><h3>Input Data Komputer</h3></div>
<div id="content">
	<form action="proses/computer-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Komputer</td>
			<?php
				include 'koneksi.php';
				$query = mysqli_query($db, "SELECT max(idcomputer) as lastidcomputer FROM tbcomputer");
				$data = mysqli_fetch_array($query);
				$kodecomputer = $data['lastidcomputer'];

				$urutancomputer = (int) substr($kodecomputer, 3, 3);

				$urutancomputer++;

				$huruf = "BK";
				$kodecomputer = $huruf . sprintf("%03s", $urutancomputer);
				?>

			<td class="isian-formulir"><input type="text" name="id_computer" value="<?php echo $kodecomputer ?>" class="isian-formulir isian-formulir-border" readonly required></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Komputer</td>
			<td class="isian-formulir"><input type="text" name="jenis_computer" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
				<select name="kategori" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="asus">Asus</option>
					<option value="dell">Dell</option>
					<option value="lenovo">Lenovo</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pemilik</td>
			<td class="isian-formulir"><input type="text" name="pemilik" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>