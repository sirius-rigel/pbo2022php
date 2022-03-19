<?php
namespace app\model;
require_once 'Aset.php';

class Buku extends Aset
{
    private $penulis;
    private $isbn;
    private $judul;


    public function Pinjam()
    {
        $pinjam = date("d-m-Y");
        $tanggal_kembali = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        $kembali = date("d-m-Y", $tanggal_kembali);
        return $kembali;
    }

    public function setPenulis($penulisBaru)
    {
        $this->penulis = $penulisBaru;
    }

    public function setISBN($isbnBaru)
    {
        $this->isbn = $isbnBaru;
    }

    public function setJudul($judulBaru)
    {
        $this->judul = $judulBaru;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getISBN()
    {
        return $this->isbn;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function tambah()
    {
        echo 'Tambah buku';
    }

    public function hapus()
    {
        echo 'Hapus buku';
    }
}