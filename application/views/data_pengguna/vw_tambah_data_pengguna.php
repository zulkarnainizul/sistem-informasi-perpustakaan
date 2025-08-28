<!-- Begin Page Content -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Pengguna
				</div>
				<div class="card-body">
					<form action="<?= base_url('index.php/Data_Pengguna/Upload') ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nim">Nim</label>
							<input name="nim" type="number" class="form-control form-control-user" id="nim" placeholder="Masukkan NIM Pengguna" required>
						</div>
                        <div class="form-group">
							<label for="nama">Nama Anggota</label>
							<input name="nama" type="text" class="form-control form-control-user" id="nama" placeholder="Masukkan Nama Pengguna" required>
						</div>
                        <div class="form-group">
							<label for="username">Username</label>
							<input name="username" type = "text" class="form-control form-control-user" id="username" placeholder="Masukkan Username Pengguna" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input name="password" type = "password" class="form-control form-control-user" id="password" placeholder="Masukkan Password Pengguna" required>
						</div>
						<div class="form-group">
							<label for="level">Level</label>
							<br>
							<select name="level" class="form-control">
									<option value="Anggota">Anggota</option>
									<option value="Petugas">Petugas</option>
							</select>
						</div>
                        
						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<br>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" required="required"> Laki-Laki
                                <br/>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" required="required"> Perempuan
						</div>
						<div class="form-group">
							<label for="no_hp">No Hp</label>
							<input name="no_hp" type = "number"class="form-control form-control-user" id="no_hp" placeholder="Masukkan No HP"required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" required="required" placeholder="Contoh : zulkarnain@gmail.com">
						</div>
                        <div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" name="alamat" required="required"></textarea>
						</div>
                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success float-right">Tambah Pengguna</button>
                            <a href="<?= base_url('index.php/Data_Pengguna/Semua') ?>"class="btn btn-danger float-right">Kembali</a>
                        </div>   
					</form>
				</div>
			</div>

		</div>
	</div>
</div>