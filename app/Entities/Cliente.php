<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;
use App\Entities\Usuario;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente extends Usuario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;

    public function getId()
    {
        return $this->id;
    }

}