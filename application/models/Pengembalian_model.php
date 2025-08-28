<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Pengembalian_model extends CI_Model
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
        $this->db->select('p.*, u.nama as anggota, u.nim as nim, b.judul_buku as buku');
        $this->db->from('peminjaman p');
        $this->db->join('user u', 'p.id_user=u.id_user');
        $this->db->join('buku b', 'p.id_buku=b.id_buku');
        $isi = $this->db->get();
        return $isi->result_array();
    }
    // query satu data mahasiswa
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM peminjaman
                WHERE id_peminjaman = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->result_array();
        return $isi;
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM peminjaman 
                WHERE id_peminjaman = '$id'";
        $data = $this->db->query($sql);
    
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('peminjaman', $data);
		return $this->db->insert_id();//Tambahkan satu data
	}
    public function Ubah($where, $data)
	{
		$this->db->update('peminjaman', $data, $where);
		return $this->db->affected_rows(); 
	}
    function CountTableId($table_name,$where,$id)
   {
     $this->db->where($where,$id);
     $Count = $this->db->get($table_name);
     return $Count->num_rows();
   }
}
?>
