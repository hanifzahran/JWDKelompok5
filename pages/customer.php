<div id="label-page"><h3>Tampil Data Customer</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=customer-input" class="tombol btn btn-primary">Tambah Customer</a></p>
	<table id="tabel-tampil" class="table table-bordered table-hover table-striped table-responsive-lg">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Customer</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM tbcustomer ORDER BY idcustomer DESC";
		$q_tampil_customer = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_customer=mysqli_fetch_array($q_tampil_customer)){
			
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_customer['idcustomer']; ?></td>
			<td><?php echo $r_tampil_customer['nama']; ?></td>
			<td><?php echo $r_tampil_customer['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_customer['alamat']; ?></td>
			<td>

				<div class="tombol-opsi-container"><a href="index.php?p=customer-edit&id=<?php echo $r_tampil_customer['idcustomer'];?>" class="tombol btn btn-warning">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/customer-hapus.php?id=<?php echo $r_tampil_customer['idcustomer']; ?>" onclick="return confirm('Apakah anda yakin delete data ini?');" class="tombol btn btn-danger">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>