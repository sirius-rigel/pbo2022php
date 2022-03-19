<?php
namespace app\model;
require_once 'core\Model.php';

class Aset extends \core\Model
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