<?php include 'header.php'; ?>
<title>DATA GURU</title>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA GURU SMA NEGERI 12 SLAWI</h2>
	</div>
<a class="btn btn-primary " href="tambahGuru.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID</th>
 		<th>NAMA GURU</th>
		<th>ALAMAT</th>
		<th>NO TELEPHONE</th>
		<th>GENDER</th>
		<th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM guru ORDER BY id_guru DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['id_guru'] ?></td>
 	 	<td><?= $dta['nama_guru'] ?></td>
		  <td><?= $dta['alamat'] ?></td>
		  <td><?= $dta['no_telephone'] ?></td>
		  <td><?= $dta['gender_id_gender'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahGR.php?id=<?= $dta['id_guru'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusGR.php?id=<?= $dta['id_guru'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>