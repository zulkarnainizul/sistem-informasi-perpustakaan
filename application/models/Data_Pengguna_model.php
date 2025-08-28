<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Data_Pengguna_model extends CI_Model
{
    // digunakan untuk mengakses semua library yang digunakan untuk class ii
    public function __construct()
    {
        // membuat koneksi databse
        $this->load->database();
    }
    // query semua mahasiswa
    public function TampilSemua()
    {
        $sql = "SELECT * FROM tabel_login";
        $data = $this->db->query($sql);
        $isi = $data->result_array();//Tampilkan semua baris data
        return $isi;
    }
    // query satu data mahasiswa
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM tabel_login
                WHERE id_login = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->row_array();//Tampilkan satu baris data
        return $isi;
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM tabel_login 
                WHERE id_login = '$id'";
        $data = $this->db->query($sql);
    
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('tabel_login', $data);
		return $this->db->insert_id();//Tambahkan satu data
	}
    public function Ubah($where, $data)
	{
		$this->db->update('tabel_login', $data, $where);
		return $this->db->affected_rows(); 
	}
}
?>
