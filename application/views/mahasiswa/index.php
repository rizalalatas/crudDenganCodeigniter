<div class="container">
<?php if($this->session->flashdata('flash') ): ?>
<div class="row-mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">Data mahasiswa
				<strong>berhasil</strong><?= $this->session->flashdata('flash');?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
		</div>
</div>
<?php endif; ?>


	<div class="row-mt-3">
		<div class="col-md-6">
			<a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
	</div>

	</div>
	<div class="row-mt-3">
	<div class="col-md-6">
		<h3>Daftar Mahasiswa</h3>

		
			
			<form action="" method="post">
					<div class="input-group">
  					<input type="text" class="form-control" placeholder="cari data mahasiswa.." name="keyword" aria-label="" aria-describedby="button-addon2">
  					<div class="input-group-append">
    				<button class="btn btn-primary" type="submit">Cari</button>
  					</div>
				</div>
			</form>

			<?php if( empty($mahasiswa) ):?>
			<div class="alert alert-danger" role="alert">
  			Data Mahasiswa tidak ditemukan
			</div>
			<?php endif; ?>
	


	
		<ul class="list-group">
			<?php foreach($mahasiswa as $mhs): ?>
		  <li class="list-group-item"><?= $mhs['nama']; ?>
			<a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right" 
			onclick="return confirm('yakin ingin menghapus?');">hapus</a>
			<a href="<?= base_url();?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right">detail</a>
			<a href="<?= base_url();?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right">ubah</a>
			</li>
		</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>
