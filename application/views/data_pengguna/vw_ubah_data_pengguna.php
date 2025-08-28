<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Pengguna
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Data_Pengguna/Update') ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id_user" value="<?= $data_pengguna['id_user']?>">
						<div class="form-group">
							<label for="nim">Nim</label>
							<input name="nim" type="number" value="<?= $data_pengguna['nim']?>" class="form-control form-control-user" id="nim" placeholder="Masukkan NIM Pengguna" required>
						</div>
                        <div class="form-group">
							<label for="nama">Nama</label>
							<input name="nama" type="text" value="<?= $data_pengguna['nama']?>" class="form-control form-control-user" id="nama" placeholder="Masukkan Nama Pengguna" required>
						</div>
                        <div class="form-group">
							<label for="username">User</label>
							<input name="username" type = "text" value="<?= $data_pengguna['username']?>"class="form-control form-control-user" id="username" placeholder="Masukkan Username Pengguna" required>
						</div>
                        <div class="form-group">
							<label for="no_hp">No Hp</label>
							<input name="no_hp" type = "number" value="<?= $data_pengguna['no_hp']?>" class="form-control form-control-user" id="no_hp" placeholder="Masukkan No HP"required>
						</div>
                        <div class="form-group">
							<label for="level">Level</label>
							<br>
							<select name="level" value="<?= $data_pengguna['level']?>" class="form-control">
									<option value="Anggota">Anggota</option>
									<option value="Petugas">Petugas</option>
							</select>
						</div>
                        <div class="form-group">
							<label for="alamat">Alamat</label>
							<input name="alamat" type = "text" value="<?= $data_pengguna['alamat']?>" class="form-control form-control-user" id="alamat" placeholder="Masukkan Alamat Pengguna"required>
						</div>
                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success float-right">Ubah Pengguna</button>
                            <a href="<?= base_url('index.php/Data_Pengguna/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        </div>    
					</form>
				</div>
			</div>

		</div>
	</div>
</div>