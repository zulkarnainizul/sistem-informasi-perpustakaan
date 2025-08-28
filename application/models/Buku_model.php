<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Buku_model extends CI_Model
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
        $this->db->select('b.*, r.nama_rak as rak, k.nama_kategori as kategori');
        $this->db->from('buku b');
        $this->db->join('rak r', 'b.id_rak=r.id_rak');
        $this->db->join('kategori k', 'b.id_kategori=k.id_kategori');
        $isi = $this->db->get();
        return $isi->result_array();
    }
    // query satu data mahasiswa
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM buku 
                WHERE id_buku = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->row_array();//Tampilkan satu baris data
        return $isi;
    }
    function CountTableId($table_name,$where,$id)
    {
     $this->db->where($where,$id);
     $Count = $this->db->get($table_name);
     return $Count->num_rows();
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM buku 
                WHERE id_buku = '$id'";
        $data = $this->db->query($sql);
    
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('buku', $data);
		return $this->db->insert_id();//Tambahkan satu data
	}
    public function Ubah($where, $data)
	{
		$this->db->update('buku', $data, $where);
		return $this->db->affected_rows(); 
	}
}
?>
