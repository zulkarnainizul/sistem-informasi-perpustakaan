<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Biaya Denda
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Denda/Update') ?>" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="id_biaya_denda" value="<?= $denda['id_biaya_denda']?>">
                    <div class="form-group">
							<label for="harga_denda">Nama Denda Buku</label>
							<input name="harga_denda" type="text" value="<?= $denda['harga_denda']?>"class="form-control" id="harga_denda" placeholder="Masukkan Harga Denda" required>
						</div>
                        <div class="form-group">
							<label for="status">Status</label>
							<br>
							<select name="status" value="<?= $denda['status']?>"class="form-control">
									<option value="Aktif">Aktif</option>
									<option value="Tidak Aktif">Tidak Aktif</option>
							</select>
						</div>
                        <div class="form-group">
							<label for="tgl_tetap">Tanggal Tetap</label>
							<input name="tgl_tetap" type="date"value="<?= $denda['tgl_tetap']?>" class="form-control form-control-user" id="tgl_tetap" placeholder="Masukkan Nama Denda Buku" required>
						</div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Ubah Rak</button>
                                <a href="<?= base_url('index.php/Denda/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        
                            </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
</div>