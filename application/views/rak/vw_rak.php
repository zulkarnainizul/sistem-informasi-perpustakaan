<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul?></h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <div class="col-md-6"><a href="<?= base_url('index.php/Rak/Tambah') ?>" class="btn btn-info mb-2">Tambah Rak Buku</a></div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Rak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($rak as $r){ ?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$r['nama_rak'];?></td>
                                                <td>
                                                <a href="<?= base_url('index.php/Rak/Ubah/').$r['id_rak']?>" class="btn btn-info"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                                <a href="<?= base_url('index.php/Rak/Hapus/').$r['id_rak']?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
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