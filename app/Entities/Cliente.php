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
    private $cpf;


    public function getId()
    {
        return $this->id;
    }
   
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

}