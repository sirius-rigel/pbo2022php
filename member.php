<?php
class member {
    const PRIA = 1;
    const WANITA = 0;

    private $no_member;
    private $nama_lengkap;
    private $no_hp;

    public function __construct($nama_lengkap_baru,$no_hp_baru)
    {
        $this->nama_lengkap = $nama_lengkap_baru;
        $this->no_hp = $no_hp_baru;
    }

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

$member_baru = new member("Dimas Anjar Pratama",6281253751004);
echo $member_baru->setNama_lengkap("Meilia Susanti");
echo "Nama Member : ".$member_baru->getNama_lengkap()."\n";
echo "".$member_baru::WANITA."\n";
echo "Nomor HP : ".$member_baru->getNo_hp()
?>