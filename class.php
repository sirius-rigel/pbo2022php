<?php

class buku {
    public $penulis;
    public $isbn;
    public $judul;

    public function pinjam()
    {
        $pinjam = date("d-m-Y");
        $tanggal_kembali = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
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

class member {
    public $no_member;
    public $nama_lengkap;
    public $no_hp;

    public function setNo_member($isi_no_member)
    {
        $this->no_member = $isi_no_member;
    }

    public function setNama_lengkap($isi_nama_lengkap)
    {
        $this->nama_lengkap = $isi_nama_lengkap;
    }

    public function setNo_hp($isi_no_hp)
    {
        $this->no_hp = $isi_no_hp;
    }

    public function getNo_member()
    {
        return $this->no_member;
    }

    public function getNama_lengkap()
    {
        return $this->nama_lengkap;
    }

    public function getNo_hp()
    {
        return $this->no_hp;
    }
}

$member_rigel = new member();
$member_rigel->setNo_member(0012);
$member_rigel->setNama_lengkap("Sirius Rigel");
$member_rigel->setNo_hp("081253761004");

echo "INFORMASI PEMINJAMAN";
echo "Judul : ". $keterangan_buku->getjudul()."<br>";
echo "Penulis : ". $keterangan_buku->getPenulis()."<br>";
echo "ISBN : ". $keterangan_buku->getIsbn()."<br>";
echo "Nama Peminjam :". $member_rigel->getNama_lengkap()."<br>";
echo "No Member :". $member_rigel->getNo_member()."<br>";
echo "No HP : ". $member_rigel->getNo_hp()."<br>";
echo "Tanggal Pinjam : ".date("d-m-Y")."<br>";
echo "Tanggal Kembali : ". $pinjam_buku;
?>