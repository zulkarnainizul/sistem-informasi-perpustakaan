<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Buku
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Buku/Update') ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_buku" value="<?= $buku['id_buku']?>">
                    <div class="form-group">
							<label for="kode_buku">Kode Buku</label>
							<input name="kode_buku" type="text" value="<?= $buku['kode_buku']?>" class="form-control form-control-user" id="kode_buku" placeholder="Masukkan Kode Buku" required>
						</div>
						<div class="form-group">
							<label for="judul_buku">Judul Buku</label>
							<input name="judul_buku" type="text" value="<?= $buku['judul_buku']?>" class="form-control form-control-user" id="judul_buku" placeholder="Masukkan Judul Buku" required>
						</div>
                        <div class="form-group">
							<label for="penulis_buku">Penulis Buku</label>
							<input name="penulis_buku" type="text" value="<?= $buku['penulis_buku']?>" class="form-control form-control-user" id="penulis_buku" placeholder="Masukkan Penulis Buku"required>
						</div>
                        <div class="form-group">
							<label for="penerbit_buku">Penerbit Buku</label>
							<input name="penerbit_buku" type = "text" value="<?= $buku['penerbit_buku']?>" class="form-control form-control-user" id="penerbit_buku" placeholder="Masukkan Penerbit Buku" required>
						</div>
                        <div class="form-group">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input name="tahun_terbit" type = "number" value="<?= $buku['tahun_terbit']?>" class="form-control form-control-user" id="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
						</div>
                        <div class="form-group">
							<label for="stok">Stok Buku</label>
							<input name="stok" type = "number" value="<?= $buku['stok']?>" class="form-control form-control-user" id="stok" placeholder="Masukkan Stok Buku" required>
						</div>
                        <div class="form-group">
                        <img src="<?= base_url('assets/img/buku/') . $buku['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="gambar" id="gambar">
									<label for="gambar" class="custom-file-label">Pilih Gambar</label>
								</div>
							</div>
                        <div class="form-group">
							<label for="id_rak">Rak</label>
								<select name="id_rak" id="id_rak" class="form-control">
									<?php foreach ($rak as $p) : ?>
										<option value="<?= $p['id_rak']; ?>" <?php if ($buku['id_rak'] == $p['id_rak']) {
																			echo "selected";
																		} ?>><?= $p['nama_rak']; ?></option>
									<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="id_kategori">Kategori</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<?php foreach ($kategori as $p) : ?>
										<option value="<?= $p['id_kategori']; ?>" <?php if ($buku['id_kategori'] == $p['id_kategori']) {
																			echo "selected";
																		} ?>><?= $p['nama_kategori']; ?></option>
									<?php endforeach; ?>
							</select>
						</div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Ubah Buku</button>
                                <a href="<?= base_url('index.php/Buku/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        
                            </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
</div>