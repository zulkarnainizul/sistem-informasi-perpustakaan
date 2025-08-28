<?php if (! defined('BASEPATH')) exit ('No direct access
allowed');

class Kategori extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Kategori_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman Kategori Buku';
        $isi['kategori'] = $this->Kategori_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('kategori/vw_kategori', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah Kategori Buku';
        $isi['kategori'] = $this->Kategori_model->TampilSatu($id);
        $this ->load->view('layout/header', $isi);
        $this ->load->view('kategori/vw_ubah_kategori', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Kategori Buku';
        $this ->load->view('layout/header', $isi);
        $this ->load->view('kategori/vw_tambah_kategori', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Upload()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori'),
        ];
        $this->Kategori_model->Tambah($data);
        redirect('/Kategori/Semua');
    }
    public function Update()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori'),
        ];
			$id_kategori = $this->input->post('id_kategori');
			$this->Kategori_model->Ubah(['id_kategori' => $id_kategori], $data);
        redirect('/Kategori/Semua');
    }
    public function Hapus($id)
    {
        $this->Kategori_model->Hapus($id);
        redirect('/Kategori/Semua');
    }    
}