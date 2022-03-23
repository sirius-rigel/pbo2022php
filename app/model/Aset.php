<?php
namespace App\Model;
use Core\Model;

class Aset extends \Core\Model
{
    protected $no_inventaris;
    protected $lokasi;
    protected $tahun_pengadaan;

    public function tambah()
    {
        echo 'Tambah aset';
    }

    public function hapus()
    {
        echo 'Hapus aset';
    }
}