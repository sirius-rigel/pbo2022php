<?php

class buku {
    public $penulis;
    public $isbn;
    public $judul;

    public function pinjam()
    {
        $pinjam = date("d-m-Y");
        $tanggal_kembali = mktime(0,0,0,date("n"),date("j")+6,date("Y"));
        $kembali = date("d-m-Y", $tanggal_kembali);
        return $kembali;
    }

    public function setPenulis($isi_penulis)
    {
        $this->penulis = $isi_penulis;
    }

    public function setIsbn($isi_isbn)
    {
        $this->isbn = $isi_isbn;
    }

    public function setjudul($isi_judul)
    {
        $this->judul = $isi_judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getjudul()
    {
        return $this->judul;
    }
}

$keterangan_buku = new buku();
$keterangan_buku->setPenulis("Masashi Kishimoto");
$keterangan_buku->setIsbn(9780606382137);
$keterangan_buku->setjudul("Naruto");
$pinjam_buku = $keterangan_buku->pinjam();

echo "Informasi Buku"."\n";
echo "Judul Buku: ". $keterangan_buku->getjudul()."\n";
echo "Penulis : ". $keterangan_buku->getPenulis()."\n";
echo "ISBN : ". $keterangan_buku->getIsbn()."\n";
echo "Tanggal Pinjam : ".date("d-m-Y")."\n";
?>