<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<?php
				
				include 'koneksi.php';
				$query = mysqli_query($db, "SELECT max(idtransaksi) as lastid FROM tbtransaksi");
				$data = mysqli_fetch_array($query);
				$kode = $data['lastid'];

				$urutan = (int) substr($kode, 3, 3);

				$urutan++;

				$huruf = "TR";
				$kode = $huruf . sprintf("%03s", $urutan);
				?>
			<td class="isian-formulir"><input type="text" name="id_transaksi" value="<?php echo $kode ?>" class="isian-formulir isian-formulir-border" required readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Customer</td>
			<td class="isian-formulir">
				<select name="id_customer" class="isian-formulir isian-formulir-border">
					<option value="" select="selected" required> Pilih Data customer </option>
					<?php
						$q_tampil_customer=mysqli_query($db,
							"SELECT * FROM tbcustomer
							WHERE status='Tidak Meminjam'
							ORDER BY idcustomer"
						);
						while($r_tampil_customer=mysqli_fetch_array($q_tampil_customer)){
							echo"<option value=$r_tampil_customer[idcutomer]>$r_tampil_customer[idcustomer] | $r_tampil_customer[nama]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">computer</td>
			<td class="isian-formulir">
				<select name="id_computer" class="isian-formulir isian-formulir-border">
					<option value="" select="selected"> Pilih Data computer </option>
					<?php
						$q_tampil_computer=mysqli_query($db,
							"SELECT * FROM tbcomputer
							WHERE status='Tersedia'
							ORDER BY idcomputer"
						);
						while($r_tampil_computer=mysqli_fetch_array($q_tampil_computer)){
							echo"<option value=$r_tampil_computer[idcomputer]>$r_tampil_computer[idcomputer] | $r_tampil_computer[jeniscomputer]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="date" name="tgl_pinjam" value="<?php echo $tgl; ?>" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>