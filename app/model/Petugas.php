<?php
namespace app\model;
require_once 'User.php';

class Petugas extends User
{
    public $nip;
    public $nama_lengkap;
    public $alamat;

    public function lihatProfil()
    {
        $profil = array(
            'nip' => 'Lihat nip',
            'nama' => 'Lihat nama',
            'alamat'=> 'LIhat alamat'
        );
    }
}