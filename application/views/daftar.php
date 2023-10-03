<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php');
		?>
		<div class="tittle">
			<h2>Data Buku</h2>
		</div>
		<div class="isian">
			<table border=1>
				<tr>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Action</th>
				</tr>

				<?php foreach ($buku as $buku) : ?>
					<tr>
						<td>
							<?php echo $buku->kodebuku ?>
						</td>
						<td>
							<?php echo $buku->judulbuku ?>
						</td>
						<td>
							<?php echo $buku->pengarang ?>
						</td>
						<td>
							<?php echo $buku->penerbit ?>
						</td>
						<td><a href=edit/<?php echo $buku->id ?>>Edit</a>||<a href=delete/<?php echo $buku->id ?>>Hapus</a></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
	</div>
</body>

</html>