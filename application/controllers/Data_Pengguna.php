<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('User_model');//include model pengguna
    }

    public function Semua()
    {
        $isi['judul']='Halaman Pengguna';
        $isi['data_pengguna'] = $this->User_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('data_pengguna/vw_data_pengguna', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    
    public function Ubah($id)
    {
        $isi['judul']='Halaman Ubah Pengguna';
        $isi['data_pengguna'] = $this->User_model->TampilSatu($id);
        $this ->load->view('layout/header', $isi);
        $this ->load->view('data_pengguna/vw_ubah_data_pengguna', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Tambah()
    {
        $isi['judul']='Halaman Tambah Pengguna';
        $isi['data_pengguna'] = $this->User_model->TampilSemua();
        $this ->load->view('layout/header', $isi);
        $this ->load->view('data_pengguna/vw_tambah_data_pengguna', $isi);
        $this ->load->view('layout/footer', $isi);
    }
    public function Upload()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->User_model->Tambah($data);
        redirect('/Data_Pengguna/Semua');
    }
    public function Update()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
        ];
			$id_user = $this->input->post('id_user');
			$this->User_model->Ubah(['id_user' => $id_user], $data);
        redirect('/Data_Pengguna/Semua');
    }
    public function Hapus($id)
    {
        $this->User_model->Hapus($id);
        redirect('/Data_Pengguna/Semua');
    }
    
}