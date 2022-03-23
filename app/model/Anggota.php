<?php
namespace app\model;
use app\model\User;

class Anggota extends User
{
    private $no_anggota;
    private $nama_anggota;
    private $no_hp;

    public function setNoAnggota($no_anggotaBaru)
    {
        $this->no_anggota = $no_anggotaBaru;
    }

    public function setNamaAnggota($namaBaru)
    {
        $this->nama_anggota = $namaBaru;
    }

    public function setNoHP($no_hpBaru)
    {
        $this->no_hp = $no_hpBaru;
    }

    public function getNoAnggota()
    {
        return $this->no_anggota;
    }

    public function getNamaAnggota()
    {
        return $this->nama_anggota;
    }

    public function getNoHP()
    {
        return $this->no_hp;
    }
}