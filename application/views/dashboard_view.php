<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('Peminjaman/Semua'));}?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
  <div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <section class="content-header">
      <h1>
        Dashboard  <small>Perpustakaan</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                    <div class="inner">
                      <h3><?= $count_pengguna;?></h3>

                      <p>Anggota</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="data_pengguna/Semua" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                   <!--small box-->
                  <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="inner">
                      <h3><?= $count_buku;?></h3>

                      <p>Jenis Buku</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="Buku/Semua" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                   <!--small box-->
                  <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="inner">
                      <h3><?= $count_kategori;?></h3>

                      <p>Kategori</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-bookmark"></i>
                    </div>
                    <a href="Kategori/Semua" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                  <!-- small box -->
                  <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="inner">
                      <h3><?= $count_pinjam->jml ?? 0;?></h3>

                      <p>Dipinjamkan</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="Peminjaman/Semua" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="inner">
                      <h3><?= $count_kembali->jml ?? 0;?></h3>

                      <p>Dikembalikan ( Bulan Ini )</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-list"></i>
                    </div>
                    <a href="Pengembalian/Semua" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="inner">
                      <h3>
                        <?php 
                          $pinjam = $this->db->query("SELECT DISTINCT `id_pinjam`, 
                            `status`, `tanggal_pinjam`, `tanggal_kembali` 
                            FROM peminjaman WHERE status = 'Dipinjam' ORDER BY id_pinjam DESC");
                          $count = 0;
                          $jmla = 0;
                          foreach($pinjam->result_array() as $isi)
                          {
                            $pinjam_id = $isi['id_pinjam'];
                            $jml = $this->db->query("SELECT * FROM peminjaman WHERE id_pinjam = '$pinjam_id'")->num_rows();			
                            $date1 = date('Ymd');
                            $date2 = preg_replace('/[^0-9]/','',$isi['tanggal_kembali']);
                            $diff = $date1 - $date2;
                            if($diff > 0 )
                            {
                              $jmla += $count+1;
                            }else{

                              $jmla += $count + 0;
                            }
                          }
                          echo $jmla;
                        ?>
                      </h3>

                      <p>Denda</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa fa-money-check"></i>
                    </div>
                    <a href="Denda/Semua  " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                    </div>
                </div>

          
        </section>
    </div>
    <!-- /.content -->
