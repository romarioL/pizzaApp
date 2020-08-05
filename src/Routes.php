<?php
namespace Src;

use Src\traits\TraitURLParser;

class Routes
{
    use TraitURLParser;

    private $rota;


    public function getRota()
    {
        $url = $this->parserURL();

        $i = $url[0];

        $this->rota = array(
         "" => "HomeController",
         "home" => "HomeController"
      );

        if (array_key_exists($i, $this->rota)) {
            if (file_exists("src/Controllers/{$this->rota[$i]}.php")) {
                return $this->rota[$i];
            } else {
                return "HomeController";
            }
        } else {
            return "NotFoundController";
        }
    }
}
