<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Rak Buku
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Rak/Update') ?>" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="id_rak" value="<?= $rak['id_rak']?>">
                    <div class="form-group">
							<label for="nama_rak">Nama Rak Buku</label>
							<input name="nama_rak" type="text" value="<?= $rak['nama_rak']?>"class="form-control" id="nama_rak" placeholder="Masukkan Nama Rak Buku" required>
						</div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Ubah Rak</button>
                                <a href="<?= base_url('index.php/Rak/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        
                            </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
</div>