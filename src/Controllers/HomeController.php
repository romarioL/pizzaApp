<?php

namespace Src\Controllers;
use Src\Render;

class HomeController extends Render
{
    public function index()
    {
        $this->setTitle("Página inicial");
        $this->setDescription("Essa  é a página inicial");
        $this->setKeywords("mvc completo, curso mvc");
        $this->setDir("home");
        $this->renderLayout();
    }
}
