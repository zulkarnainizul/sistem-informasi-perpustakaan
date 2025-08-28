<?php
if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class User_model extends CI_Model
{
    public function __construct()
    {
        // membuat koneksi databse
        $this->load->database();
    }
    public function TampilSemua()
    {
        $sql = "SELECT * FROM user";
        $data = $this->db->query($sql);
        $isi = $data->result_array();
        return $isi;
    }
    public function TampilSatu($id)
    {
        $sql = "SELECT * FROM user
                WHERE id_user = '$id'";
        $data = $this->db->query($sql);
        $isi = $data->row_array();
        return $isi;
    }
    public function TampilAnggota()
    {
        $sql = "SELECT * FROM user WHERE level='Anggota'";
        $data = $this->db->query($sql);
        $isi = $data->result_array();
        return $isi;
    }
    public function Hapus($id)
    {
        $sql = "DELETE FROM user 
                WHERE id_user = '$id'";
        $data = $this->db->query($sql);
    
        return $data;
    }
    public function Tambah($data)
	{
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}
    public function Ubah($where, $data)
	{
		$this->db->update('user', $data, $where);
		return $this->db->affected_rows(); 
	}
}
?>
