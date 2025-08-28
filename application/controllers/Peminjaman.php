<?php if (! defined('BASEPATH')) exit ('No direct access allowed');

class Peminjaman extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Peminjaman_model');//include model mahasiswa
        $this->load->model('Buku_model');//include model mahasiswa
        $this->load->model('User_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman Peminjaman';
        $isi['peminjaman'] = $this->Peminjaman_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('peminjaman/vw_peminjaman', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah Peminjaman';
        $isi['peminjaman'] = $this->Peminjaman_model->TampilSatu($id);
        $isi['buku'] = $this->Buku_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('peminjaman/vw_ubah_peminjaman', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Peminjaman';
        $isi['buku'] = $this->Buku_model->TampilSemua();
        $isi['anggota'] = $this->User_model->TampilAnggota();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('peminjaman/vw_tambah_peminjaman', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Kembali(){
        if(!empty($post['tambah']))
		{

				$data = array(
					'pinjam_id' => htmlentities($post['nopinjam']), 
					'anggota_id' => htmlentities($post['anggota_id']), 
					'buku_id' => $id, 
					'status' => 'Dipinjam', 
					'jml' => $isi['jml'],
					'tgl_pinjam' => htmlentities($post['tgl']), 
					'tgl_balik'  => $tgl2, 
					'tgl_kembali'  => '0',
					'periode'	=> date('m-Y')
				);
				$this->db->insert('peminjaman',$data);
				$dd = $this->db->query("SELECT sum(jml) as jml FROM peminjaman WHERE id_buku    = '$id' AND status = 'Dipinjam'");
				$jml = $dd->row();
				$data_update[] = array(
					'id_buku' => $id,
					'dipinjam' => $jml->jml
				);
			}
			$total_array = count($data);
			if($total_array != 0)
			{
				// $this->db->insert_batch('tbl_pinjam',$data);
				$this->db->update_batch('buku',$data_update,'id_buku');
				unset_cart();
			}

			$this->session->set_flashdata('pesan','<div id="notifikasi"><div class="alert alert-success">
								<p> Tambah Pinjam Buku Sukses !</p>
							</div></div>');

			redirect(base_url('index.php/Peminjaman/Semua')); 
		}
    public function Upload()
    {
        $data = [
            'id_pinjam' => $this->input->post('id_pinjam'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'id_buku' => $this->input->post('id_buku'),
            'id_user' => $this->input->post('id_user'),
            ];
        $this->Peminjaman_model->Tambah($data);
        redirect('/Peminjaman/Semua');
    }
    public function Update()
    {
        $data = [
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'id_buku' => $this->input->post('id_buku'),
            'id_user' => $this->input->post('id_user'),
        ];
			$id_peminjaman = $this->input->post('id_peminjaman');
			$this->Peminjaman_model->Ubah(['id_peminjaman' => $id_peminjaman], $data);
        redirect('/Peminjaman/Semua');
    }
    public function Hapus($id)
    {
        $this->Peminjaman_model->Hapus($id);
        redirect('/Peminjaman/Semua');
    }  
}
