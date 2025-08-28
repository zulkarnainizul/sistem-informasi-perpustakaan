<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul?></h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <div class="col-md-6"><a href="<?= base_url('index.php/Buku/Tambah') ?>" class="btn btn-info mb-2">Tambah Buku</a></div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Penerbit</th>
                                            <th>Penulis</th>
                                            <th>Tahun Terbit</th>
                                            <th>Stok</th>
                                            <th>Gambar</th>
                                            <th>Rak</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($buku as $bk){ ?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$bk['kode_buku'];?></td>
                                                <td><?=$bk['judul_buku'];?></td>
                                                <td><?=$bk['penerbit_buku'];?></td>
                                                <td><?=$bk['penulis_buku'];?></td>
                                                <td><?=$bk['tahun_terbit'];?></td>
                                                <td><?=$bk['stok'];?></td>
                                                <td><img src="<?= base_url('assets/img/buku/') . $bk['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td><?=$bk['rak'];?></td>
                                                <td><?=$bk['kategori'];?></td>
                                                <td>
                                                <a href="<?= base_url('index.php/Buku/Ubah/').$bk['id_buku']?>" class="btn btn-info"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                                <a href="<?= base_url('index.php/Buku/Hapus/').$bk['id_buku']?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php $i++;?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>