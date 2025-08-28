<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    // Fungsi untuk memeriksa keberadaan user di database
    public function cek_admin($u, $p)
    {
        // Menggunakan get_where() untuk mencari baris di tabel 'user'
        // di mana 'username' cocok dengan $u dan 'password' cocok dengan $p
        return $this->db->get_where('user', array('username' => $u, 'password' => $p));
    }

    // Fungsi untuk menyimpan user baru ke database
    function insert_user($u, $p)
    {
        // Menggunakan insert() untuk menambahkan data baru ke tabel 'user'
        // Nama tabel harus konsisten dengan yang digunakan di cek_admin()
        $this->db->insert('user', array('username' => $u, 'password' => $p));
    }
}