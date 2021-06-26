<div class="row">
	<div class="col-md-6">
		<div class="card">
		  <div class="card-header">
		    Form Tambah Data
		  </div>
		  <div class="card-body">
		  	<?php if (validation_errors()) : ?>
			  	<div class="alert alert-danger" role="alert">
					  <?= validation_errors(); ?>
					</div>
				<?php endif; ?>
		    <form action="" method="POST">
		    	<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama">
				  </div>
				  <div class="form-group">
				    <label for="nim">NIM</label>
				    <input type="text" class="form-control" id="nim" name="nim">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				  <div class="form-group">
				    <select class="form-control" name="jurusan">
						  <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
						  <option value="Perancangan Wilayah Kota">Perancangan Wilayah Kota</option>
						  <option value="Teknik Elektro">Teknik Elektro</option>
						  <option value="Teknik Sipil">Teknik Sipil</option>
						</select>
				  </div>
				  <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
		    </form>
		  </div>
		</div>
	</div>
</div>