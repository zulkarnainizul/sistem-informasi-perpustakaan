<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul?></h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <div class="col-md-6"><a href="<?= base_url('index.php/Data_Pengguna/Tambah') ?>" class="btn btn-info mb-2">Tambah Pengguna</a></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>User</th>
                                            <th>No Hp</th>
                                            <th>Level</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($data_pengguna as $dp){ ?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$dp['nim'];?></td>
                                                <td><?=$dp['nama'];?></td>
                                                <td><?=$dp['username'];?></td>
                                                <td><?=$dp['no_hp'];?></td>
                                                <td><?=$dp['level'];?></td>
                                                <td><?=$dp['alamat'];?></td>
                                            <td>
                                                <a href="<?= base_url('index.php/Data_Pengguna/Ubah/').$dp['id_user']?>" class="btn btn-info"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                                 <a href="<?= base_url('index.php/Data_Pengguna/Hapus/').$dp['id_user']?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
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