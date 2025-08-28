<?php if (! defined('BASEPATH')) exit ('No direct access
allowed');

class Rak extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Rak_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman Rak Buku';
        $isi['rak'] = $this->Rak_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('rak/vw_rak', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah Rak Buku';
        $isi['rak'] = $this->Rak_model->TampilSatu($id);
        $this ->load->view('layout/header', $isi);
        $this ->load->view('rak/vw_ubah_rak', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Rak Buku';
        $this ->load->view('layout/header', $isi);
        $this ->load->view('rak/vw_tambah_rak', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Upload()
    {
        $data = [
            'nama_rak' => $this->input->post('nama_rak'),
        ];
        $this->Rak_model->Tambah($data);
        redirect('/Rak/Semua');
    }
    public function Update()
    {
        $data = [
            'nama_rak' => $this->input->post('nama_rak'),
        ];
			$id_rak = $this->input->post('id_rak');
			$this->Rak_model->Ubah(['id_rak' => $id_rak], $data);
        redirect('/Rak/Semua');
    }
    public function Hapus($id)
    {
        $this->Rak_model->Hapus($id);
        redirect('/Rak/Semua');
    }    
}
