<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\Usuario;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
/**
 * @ORM\Entity
 */
class Cliente extends Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;

    
     
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroCartao;


    public function getId()
    {
        return $this->id;
    }
   
    public function setNumeroCartao($numeroCartao)
    {
        $this->numeroCartao = $numeroCartao;
    }

    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }
}
