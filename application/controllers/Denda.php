<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Denda_model');//include model mahasiswa
    }

    public function Semua()
    {
        $isi['judul']='Halaman Biaya Denda';
        $isi['denda'] = $this->Denda_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('denda/vw_denda', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Ubah($id)
    {
        $isi['judul']='Halaman Biaya Denda';
        $isi['denda'] = $this->Denda_model->TampilSatu($id);
        $this ->load->view('layout/header', $isi);
        $this ->load->view('denda/vw_ubah_denda', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Denda';
        $this ->load->view('layout/header', $isi);
        $this ->load->view('denda/vw_tambah_denda', $isi);
        $this ->load->view('layout/footer', $isi);
    }

    public function Upload()
    {
        $data = [
            'id_biaya_denda' => $this->input->post('id_biaya_denda'),
            'harga_denda' => $this->input->post('harga_denda'),
            'status' => $this->input->post('status'),
            'tgl_tetap' => $this->input->post('tgl_tetap'),
        ];
        $this->Denda_model->Tambah($data);
        redirect('/Denda/Semua');
    }
    public function Update()
    {
        $data = [
            'id_biaya_denda' => $this->input->post('id_biaya_denda'),
            'harga_denda' => $this->input->post('harga_denda'),
            'status' => $this->input->post('status'),
            'tgl_tetap' => $this->input->post('tgl_tetap'),
        ];
			$id_biaya_denda = $this->input->post('id_biaya_denda');
			$this->Denda_model->Ubah(['id_biaya_denda' => $id_biaya_denda], $data);
        redirect('/Denda/Semua');
    }
    public function Hapus($id)
    {
        $this->Denda_model->Hapus($id);
        redirect('/Denda/Semua');
    }

}
