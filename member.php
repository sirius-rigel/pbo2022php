<?php
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

echo "Informasi Member"."\n";
echo "Nama Member :". $member_rigel->getNama_lengkap()."\n";
echo "No Member :". $member_rigel->getNo_member()."\n";
echo "No HP : ". $member_rigel->getNo_hp()."\n";
?>