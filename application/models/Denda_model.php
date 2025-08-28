<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Denda_model extends CI_Model
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
        $sql = "SELECT * FROM biaya_denda";
        $data = $this->db->query($sql);
        $isi = $data->result_array();
        return $isi;
    }
    // query satu data mahasiswa
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM biaya_denda 
                WHERE id_biaya_denda = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->row_array();
        return $isi;
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM biaya_denda 
                WHERE id_biaya_denda = '$id'";
        $data = $this->db->query($sql);
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('biaya_denda', $data);
		return $this->db->insert_id();//Tambahkan satu data
	}
    public function Ubah($where, $data)
	{
		$this->db->update('biaya_denda', $data, $where);
		return $this->db->affected_rows(); 
	}
}
?>
