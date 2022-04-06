<?php
namespace App\Model;
use Core\Minuman;

class EsJeruk implements Minuman
{
   private $rasa;

   public function setRasa($rasa)
   {
       $this->rasa = $rasa;
   }
   public function minum()
   {
       echo "Segarnya es jeruk menghilangkan rasa haus";
   }
}