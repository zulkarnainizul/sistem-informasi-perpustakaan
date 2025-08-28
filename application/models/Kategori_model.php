<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Kategori_model extends CI_Model
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
        $sql = "SELECT * FROM kategori";
        $data = $this->db->query($sql);
        $isi = $data->result_array();
        return $isi;
    }
    // query satu data mahasiswa
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM kategori
                WHERE id_kategori = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->row_array();
        return $isi;
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM kategori 
                WHERE id_kategori = '$id'";
        $data = $this->db->query($sql);
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('kategori', $data);
		return $this->db->insert_id();//Tambahkan satu data
	}
    public function Ubah($where, $data)
	{
		$this->db->update('kategori', $data, $where);
		return $this->db->affected_rows(); 
	}
}
?>
