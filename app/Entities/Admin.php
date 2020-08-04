<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;
use App\Entities\Usuario;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
/**
 * @ORM\Entity
 */
class Admin extends Usuario
{   /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $senhaAdmin;
    

    public function getId()
    {
        return $this->id;
    }

    public function setSenhaAdmin($senhaAdmin) 
    {
        $this->senhaAdmin = $senhaAdmin;
    }

    public function getSenhaAdmin()
    {
        return $this->senhaAdmin;
    }
}