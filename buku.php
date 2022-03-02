<?php

class buku {
    private $penulis;
    private $isbn;
    private $judul;

    public function __construct($penulis_baru,$isbn_baru,$judul_baru)
    {
        $this->penulis = $penulis_baru;
        $this->isbn = $isbn_baru;
        $this->judul = $judul_baru;
    }

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

    public function setJudul($isi_judul)
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

    public function getJudul()
    {
        return $this->judul;
    }
}

$buku_baru = new buku("Sutejo",366488377377,"Buku Cerita Anak Kalimantan");
echo $buku_baru->setJudul("Buku Cerita Rakyat Kalimantan Barat");
echo "Judul Buku : ".$buku_baru->getJudul()."\n";
echo "Nama Penulis : ".$buku_baru->getPenulis()."\n";
echo "ISBN : ".$buku_baru->getIsbn();
?>