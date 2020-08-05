<?php

namespace Src\Controllers;
use Src\Render;

class NotFoundController extends  Render
{
    public function index()
    {
        $this->setTitle("Não encontrado");
        $this->setDescription("Essa  é a página inicial");
        $this->setKeywords("mvc completo, curso mvc");
        $this->setDir("notFound");
        $this->renderLayout();
    }
}