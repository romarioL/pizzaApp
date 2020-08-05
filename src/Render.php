<?php
namespace Src;

class Render
{
    private $dir;

    private $title;

    private $description;

    private $keywords;

    public function getDir()
    {
        return $this->dir;
    }

    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    public function renderLayout()
    {
        include_once(__DIR__ . "/view/layout.php");
    }

    public function addHead()
    {
        if (file_exists(__DIR__ . "/view/{$this->getDir()}/head.php")) {
            include(__DIR__ . "/view/{$this->getDir()}/head.php");
        }
    }

    public function addHeader()
    {
        if (file_exists(__DIR__ . "/view/{$this->getDir()}/header.php")) {
            include(__DIR__ . "/view/{$this->getDir()}/header.php");
        }
    }

    public function addMain()
    {
        if (file_exists(__DIR__ . "/view/{$this->getDir()}/main.php")) {
            include(__DIR__ . "/view/{$this->getDir()}/main.php");
        }
    }


    public function addFooter()
    {
        if (file_exists(__DIR__ . "/view/{$this->getDir()}/footer.php")) {
            include(__DIR__ . "/view/{$this->getDir()}/footer.php");
        }
    }
}
