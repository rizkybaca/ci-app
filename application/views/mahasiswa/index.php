<?php if ($this->session->flashdata('flash')) : ?>
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-6 mb-3">
		<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah mahasiswa</a>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<form action="" method="POST">
			<div class="input-group mb-3">
			  <input type="text" name="keyword" class="form-control" placeholder="cari mahasiswa di sini..">
			  <div class="input-group-append">
			    <button class="btn btn-outline-primary" type="submit">Cari</button>
			  </div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h3>Data Mahasiswa</h3>
		<?php if (empty($mahasiswa)): ?>
			<div class="alert alert-danger" role="alert">
			  data mahasiswa tidak ditemukan!
			</div>
		<?php endif ?>
		<ul class="list-group">
			<?php foreach ($mahasiswa as $mhs) : ?>
		  <li class="list-group-item">
		  	<?= $mhs['nama']; ?>
		  	<a class="badge badge-danger float-right" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');">Hapus</a>
		  	<a class="badge badge-success float-right" href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>">Ubah</a>
		  	<a class="badge badge-primary float-right" href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>