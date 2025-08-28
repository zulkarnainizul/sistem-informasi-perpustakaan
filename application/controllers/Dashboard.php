<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        // Memuat helper dan model yang dibutuhkan
        $this->data['CI'] =& get_instance();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Admin');
        
        // Cek status sesi login pengguna
        // Variabel 'status' harus bernilai "login" agar bisa masuk
        if($this->session->userdata('status') != "login"){
            $url=base_url('login');
            redirect($url);
        }
    }
    
    public function index()
    {    
        // Mengambil username dari data sesi yang sudah disimpan di controller Login
        $this->data['uid'] = $this->session->userdata('nama');
        $this->data['title_web'] = 'Dashboard';
        $this->data['sidebar'] = 'dashboard';
        
        // Mengambil jumlah data dari beberapa tabel
        $this->data['count_pengguna'] = $this->db->query("SELECT * FROM user")->num_rows();
        $this->data['count_buku'] = $this->db->query("SELECT * FROM buku")->num_rows();
        $this->data['count_kategori'] = $this->db->query("SELECT * FROM kategori")->num_rows();
        
        // Mengambil jumlah total buku yang dipinjam dan dikembalikan
        $this->data['count_pinjam'] = $this->db->query("SELECT sum(jml) as jml FROM peminjaman WHERE status = 'Dipinjam'")->row();
        $this->data['count_kembali'] = $this->db->query("SELECT sum(jml) as jml FROM peminjaman WHERE status = 'Dikembalikan'")->row();
        
        // Memuat tampilan dengan data yang telah disiapkan
        $this->load->view('Layout/header', $this->data);
        $this->load->view('dashboard_view', $this->data);
        $this->load->view('Layout/footer', $this->data);
    }
}