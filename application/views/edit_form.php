<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php'); ?>

		<div class="tittle">
			<h2>Edit Data Buku</h2>
		</div>

		<div class="isian">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<br>
			<form action="<?php base_url("edit") ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="kode">Kode Buku:</label><br>
					<input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode" placeholder="Kode Buku" value="<?php echo $buku->kodebuku ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('kode') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="judul">Judul Buku:</label><br>
					<input class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" min="0" placeholder="Judul Buku" value="<?php echo $buku->judulbuku ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('judul') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="pengarang">Pengarang:</label><br>
					<input class="form-control <?php echo form_error('pengarang') ? 'is-invalid' : '' ?>" type="text" name="pengarang" min="0" placeholder="Pengarang Buku" value="<?php echo $buku->pengarang ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('pengarang') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="penerbit">Penerbit:</label><br>
					<input class="form-control <?php echo form_error('penerbit') ? 'is-invalid' : '' ?>" type="text" name="penerbit" min="0" placeholder="Penerbit Buku" value="<?php echo $buku->penerbit ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('penerbit') ?>
					</div>
				</div>

				<br><input type=hidden name=id value=<?php echo $buku->id; ?>>

				<input class="btn btn-success" type="submit" name="btn" value="Save" />
			</form>
		</div>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>