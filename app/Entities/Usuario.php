<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
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
    private $nome;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setAdmin($admin) 
    {
        $this->admin = $admin;
    }

    public function getAdmin() 
    {
        return $this->admin;
    }

    public function setSenha($senha) 
    {
        $this->senha = $senha;
    }

    public function getSenha() 
    {
        return $this->senha;
    }
}
