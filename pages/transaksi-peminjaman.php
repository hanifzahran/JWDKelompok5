<div id="label-page"><h3>Transaksi Peminjaman</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=transaksi-peminjaman-input" class="tombol btn btn-primary">Transaksi Baru</a></p>
	<table id="tabel-tampil" class="table table-bordered table-hover table-striped table-responsive-lg">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>ID Customer</th>
			<th>Nama</th>
			<th>ID Komputer</th>
			<th>Jenis Komputer</th>
			<th>Tanggal Pinjam</th>
			<th id="label-opsi3">Opsi</th>
		</tr>
		<?php

		$sql="SELECT tbtransaksi.*,tbcustomer.*,tbcomputer.*
		FROM tbtransaksi,tbcustomer,tbcomputer
		WHERE tbtransaksi.idcustomer=tbcustomer.idcustomer
		AND tbtransaksi.idcomputer=tbcomputer.idcomputer
		AND tbtransaksi.tglkembali='0000-00-00'
		ORDER BY tbtransaksi.idtransaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_transaksi['idtransaksi']; ?></td>
			<td><?php echo $r_transaksi['idcustomer']; ?></td>
			<td><?php echo $r_transaksi['nama']; ?></td>
			<td><?php echo $r_transaksi['idcomputer']; ?></td>
			<td><?php echo $r_transaksi['jeniscomputer']; ?></td>
			<td><?php echo $r_transaksi['tglpinjam']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="proses/nota-peminjaman.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" target="_blank " class="tombol btn btn-success">Cetak Nota</a></div>
				<div class="tombol-opsi-container"><a href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" class="tombol btn btn-danger" onclick="return confirm('Apakah anda yakin mengembalikan komputer ini?');">Pengembalian</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>