<div id="label-page"><h3>Tampil Data Komputer</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=computer-input" class="tombol btn btn-primary">Tambah Data Komputer</a></p>
	<table id="tabel-tampil" class="table table-bordered table-hover table-striped table-responsive-lg">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Komputer</th>
			<th>Jenis Komputer</th>
			<th>Kategori</th>
			<th>Pemilik</th>
			<th>status</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbcomputer ORDER BY idcomputer DESC";
		$q_tampil_computer = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_computer=mysqli_fetch_array($q_tampil_computer)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_computer['idcomputer']; ?></td>
			<td><?php echo $r_tampil_computer['jeniscomputer']; ?></td>
			<td><?php echo $r_tampil_computer['kategori']; ?></td>
			<td><?php echo $r_tampil_computer['pemilik']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="index.php?p=computer-edit&id=<?php echo $r_tampil_computer['idcomputer'];?>" class="tombol btn btn-warning">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/computer-hapus.php?id=<?php echo $r_tampil_computer['idcomputer']; ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="tombol btn btn-danger">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>