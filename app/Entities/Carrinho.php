<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarrinhoRepository")
 */
/**
 * @ORM\Entity
 */

class Carrinho
{

     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;

   
    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Produto")
     * @ORM\JoinTable(name="carrinhos_produtos",
     *      joinColumns={@ORM\JoinColumn(name="produto_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="carrinho_id", referencedColumnName="id")}
     *      )
     */
    private $produtos;


    public function __construct()
    {
        $this->produtos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function adicionarAoCarrinho(Produto $produto)
    {
        $this->produtos[] = $produto;
    }
}
