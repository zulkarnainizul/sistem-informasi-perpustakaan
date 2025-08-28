<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Peminjaman
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Peminjaman/Upload') ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="id_pinjam">No Pinjam</label>
							<input name="id_pinjam" type="text" class="form-control form-control-user" id="id_pinjam" placeholder="Masukkan No Pinjam" required>
						</div>	
						<div class="form-group">
							<label for="tanggal_pinjam">Tanggal Pinjam</label>
							<input name="tanggal_pinjam" type="date" class="form-control form-control-user" id="tanggal_pinjam" placeholder="Masukkan Tanggal Pinjam" required>
						</div>
						<div class="form-group">
							<label for="tanggal_kembali">Tanggal Pinjam</label>
							<input name="tanggal_kembali" type="date" class="form-control form-control-user" id="tanggal_kembali" placeholder="Masukkan Tanggal Pinjam" required>
						</div>
						<div class="form-group">
							<label for="judul_buku">Judul Buku</label>
							<select name="id_buku" id="id_buku" class="form-control">
								<option>Pilih Buku </option>
							<?php foreach ($buku as $p): ?>
								<option value="<?=$p['id_buku'];?>"><?=$p['judul_buku'];?>
								<?php endforeach; ?>
</select>
							<!-- <input name="judul_buku" type="text" class="form-control form-control-user" id="judul_buku" placeholder="Masukkan Judul Buku" required> -->
						</div>
                        <div class="form-group">
							<label for="nama_anggota">Nama Anggota</label>
							
							<select name="id_user" id="id_user" class="form-control">
								<option>Pilih Anggota </option>
							<?php foreach ($anggota as $p): ?>
								<option value="<?=$p['id_user'];?>"><?=$p['nama'];?>
								<?php endforeach; ?>
</select>
							<!-- <input name="nama_anggota" type="text" class="form-control form-control-user" id="nama_anggota" placeholder="Masukkan Nama Anggota" required> -->
						</div>
						
                        <!-- <div class="form-group">
							<label for="nama_petugas">Nama Petugas</label>
							<input name="nama_petugas" type = "text" class="form-control form-control-user" id="nama_petugas" placeholder="Masukkan Nama Petugas" required>
						</div> -->
                        
						</div>
                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Tambah Peminjaman</button>
                                <a href="<?= base_url('index.php/Peminjaman/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        
                            </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
<!-- </div> -->