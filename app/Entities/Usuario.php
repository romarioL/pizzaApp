<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
/**
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"usuario" = "Usuario", "cliente" = "Cliente"})
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
     * @ORM\Column(type="boolean", length=1)
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
