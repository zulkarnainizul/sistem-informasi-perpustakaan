<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul?></h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pinjam</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Pinjam</th>
                                            <th>Balik</th>
                                            <th>Buku</th>
                                            <th>Status</th>
                                            <th>Denda</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php $i=1;?>
                                        <?php foreach ($pengembalian as $p){ ?>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$p['id_pinjam'];?></td>
                                                <td><?=$p['nim'];?></td>
                                                <td><?=$p['anggota'];?></td>
                                                <td><?=$p['tanggal_pinjam'];?></td>
                                                <td><?=$p['tanggal_kembali'];?></td>
                                                <td><?=$p['buku'];?></td>
                                                <td><?=$p['status'  ];?></td>
                                                <td><?=$p['denda'];?></td>
                                            </tr>
                                        <?php $i++;?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>