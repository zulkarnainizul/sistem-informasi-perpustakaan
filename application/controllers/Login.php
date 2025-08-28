<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Load model 'M_login' untuk interaksi database
        $this->load->model('M_login');
    }

    public function index()
    {
        // Memuat tampilan login
        $this->load->view('login_view');
    }

    public function aksi_login()
    {
        // Ambil data dari form login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Panggil model untuk cek username dan password
        $cek = $this->M_login->cek_admin($username, $password)->num_rows();

        if ($cek > 0) {
            // Jika data cocok, buat data session
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            
            // Simpan data session
            $this->session->set_userdata($data_session);

            // Redirect ke halaman dashboard
            redirect('Dashboard');
        } else {
            // Jika data tidak cocok, tampilkan pesan kesalahan
            echo "<script>alert('Username atau password salah!');history.go(-1);</script>";
        }
    }

    public function tambah_user()
    {
        // Memuat tampilan untuk menambah user baru
        $this->load->view('tambah_login');
    }

    public function aksi_simpan_user()
    {
        // Ambil data dari form tambah user
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Panggil model untuk menyimpan data user baru
        $this->M_login->insert_user($username, $password);

        // Cek apakah ada baris yang terpengaruh (artinya data berhasil disimpan)
        if ($this->db->affected_rows() > 0) {
            // Jika berhasil, redirect ke halaman login
            redirect('login');
        } else {
            // Jika gagal, redirect kembali ke halaman tambah user
            redirect('login/tambah_user');
        }
    }
}