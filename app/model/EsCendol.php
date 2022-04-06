<?php
namespace App\Model;
use Core\Minuman;

class EsCendol implements Minuman
{
    private $rasa;

    public function setRasa($rasa)
    {
        $this->rasa = $rasa;
    }
    public function minum()
    {
        echo "Enak es cendol diminum apalagi saat berbuka";
    }
}

