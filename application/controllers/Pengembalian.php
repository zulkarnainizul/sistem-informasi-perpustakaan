<?php if (! defined('BASEPATH')) exit ('No direct access allowed');

class pengembalian extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Pengembalian_model');//include model mahasiswa
        $this->load->model('Buku_model');//include model mahasiswa
        $this->load->model('User_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman pengembalian';
        $isi['pengembalian'] = $this->Pengembalian_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('pengembalian/vw_pengembalian', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah pengembalian';
        $isi['pengembalian'] = $this->Pengembalian_model->TampilSatu($id);
        $isi['buku'] = $this->Buku_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('pengembalian/vw_ubah_pengembalian', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah pengembalian';
        $isi['buku'] = $this->Buku_model->TampilSemua();
        $isi['anggota'] = $this->User_model->TampilAnggota();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('pengembalian/vw_tambah_pengembalian', $isi);
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
				$this->db->insert('pengembalian',$data);
				$dd = $this->db->query("SELECT sum(jml) as jml FROM pengembalian WHERE id_buku    = '$id' AND status = 'Dipinjam'");
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

			redirect(base_url('index.php/pengembalian/Semua')); 
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
        $this->Pengembalian_model->Tambah($data);
        redirect('/pengembalian/Semua');
    }
    public function Update()
    {
        $data = [
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'id_buku' => $this->input->post('id_buku'),
            'id_user' => $this->input->post('id_user'),
        ];
			$id_pengembalian = $this->input->post('id_pengembalian');
			$this->Pengembalian_model->Ubah(['id_pengembalian' => $id_pengembalian], $data);
        redirect('/pengembalian/Semua');
    }
    public function Hapus($id)
    {
        $this->pengembalian_model->Hapus($id);
        redirect('/pengembalian/Semua');
    }  
}
