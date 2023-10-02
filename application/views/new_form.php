<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php'); ?>

		<div class="tittle">
			<h2>Tambah Data Buku</h2>
		</div>

		<div class="isian">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<br>
			<form action="<?php base_url('add') ?>" method="post">

				<label for="kode">Kode Buku:</label><br>
				<input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" name="kode"/>
				<div class="invalid-feedback">
					<?php echo form_error('kode') ?>
				</div>

				<label for="judul">Judul Buku:</label><br>
				<input class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" type="text" name="judul" min="0"/>
				<div class="invalid-feedback">
					<?php echo form_error('judul') ?>
				</div>

				<label for="pengarang">Pengarang Buku:</label><br>
				<input class="form-control <?php echo form_error('pengarang') ? 'is-invalid' : '' ?>" type="text" name="pengarang" min="0"/>
				<div class="invalid-feedback">
					<?php echo form_error('pengarang') ?>
				</div>

				<label for="penerbit">Penerbit Buku:</label><br>
				<input class="form-control <?php echo form_error('penerbit') ? 'is-invalid' : '' ?>" type="text" name="penerbit" min="0"/>
				<div class="invalid-feedback">
					<?php echo form_error('penerbit') ?>
				</div>

				<br><input type="submit" name="btn" value="Save" />
			</form>

			<?php $this->load->view('_partials/footer.php'); ?>
		</div>
	</div>
</body>

</html>