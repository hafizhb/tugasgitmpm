<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<div class="container">
		<?php $this->load->view('_partials/navbar.php'); ?>
		<div class="tittle">
			<h1 style="margin-bottom: 5px;">Cari Data Buku</h1>
		</div>
		<div class="isian">
			<p>Tuliskan kata kunci yang ingin dicari:</p>
			<form action="" method="get" style="flex-direction: row; align-items:center">
				<div>
					<input type="search" name="keyword" style="width: 360px;" placeholder="Kata Kunci" value="<?= html_escape($keyword) ?>" required maxlength="15" />
				</div>
				<br>
				<div>
					<input type="submit" class="button button-primary" value="Cari">
				</div>
			</form>

			<?php if ($search_result) : ?>
				<div class="search-result">
					<hr>
					<?php foreach ($search_result as $buku) : ?>
						<h2>
							<?= html_escape($buku->judulbuku) ?></a>
						</h2>
						<p><?= strip_tags(substr($buku->pengarang, 0, 200)) ?></p>
						<p><?= strip_tags(substr($buku->penerbit, 0, 200)) ?></p>
					<?php endforeach ?>
				</div>
			<?php else : ?>
				<?php if ($keyword) : ?>
					<div style="height: 300px;">
						<h1>Tidak ada yang ditemukan</h1>
						<p>Coba dengan kata kunci yang lain</p>
					</div>
				<?php endif ?>
			<?php endif ?>
		</div>
		<?php $this->load->view('_partials/footer.php'); ?>
	</div>
</body>

</html>