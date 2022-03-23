<?php
namespace App\Model;
use App\Model\User;

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
    public function register()
    {
        echo 'Petugas tidak perlu register';
    }
}
