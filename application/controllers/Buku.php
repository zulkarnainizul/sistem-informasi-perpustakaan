<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Buku_model');//include model mahasiswa
        $this->load->model('Rak_model');//include model mahasiswa
        $this->load->model('Kategori_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman Buku';
        $isi['buku'] = $this->Buku_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('buku/vw_buku', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah Buku';
        $isi['buku'] = $this->Buku_model->TampilSatu($id);
        $isi['rak'] = $this->Rak_model->TampilSemua();
        $isi['kategori'] = $this->Kategori_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('buku/vw_ubah_buku', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Buku';
        $isi['rak'] = $this->Rak_model->TampilSemua();
        $isi['kategori'] = $this->Kategori_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('buku/vw_tambah_buku', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Upload()
    {
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul_buku' => $this->input->post('judul_buku'),
            'penulis_buku' => $this->input->post('penulis_buku'),
            'penerbit_buku' => $this->input->post('penerbit_buku'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok' => $this->input->post('stok'),
            'id_rak' => $this->input->post('id_rak'),
            'id_kategori' => $this->input->post('id_kategori'),
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/buku/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->Buku_model->Tambah($data, $upload_image);
        redirect('/Buku/Semua');
    }
    public function Update()
    {
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul_buku' => $this->input->post('judul_buku'),
            'penulis_buku' => $this->input->post('penulis_buku'),
            'penerbit_buku' => $this->input->post('penerbit_buku'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'stok' => $this->input->post('stok'),
            'id_rak' => $this->input->post('id_rak'),
            'id_kategori' => $this->input->post('id_kategori'),
        ];
        $upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/buku/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['buku']['gambar'];
					unlink(FCPATH . 'assets/img/buku/' . $old_image);
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id_buku = $this->input->post('id_buku');
			$this->Buku_model->Ubah(['id_buku' => $id_buku], $data, $upload_image);
        redirect('/Buku/Semua');
    }
    public function Hapus($id)
    {
        $this->Buku_model->Hapus($id);
        redirect('/Buku/Semua');
    }
    
}
