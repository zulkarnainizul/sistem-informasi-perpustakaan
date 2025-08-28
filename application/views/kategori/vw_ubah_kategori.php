<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Kategori Buku
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Kategori/Update') ?>" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']?>">
                    <div class="form-group">
							<label for="nama_kategori">Nama Kategori Buku</label>
							<input name="nama_kategori" type="text" value="<?= $kategori['nama_kategori']?>"class="form-control" id="nama_kategori" placeholder="Masukkan Nama Kategori Buku" required>
						</div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Ubah Kategori</button>
                                <a href="<?= base_url('index.php/Kategori/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        
                            </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
</div>