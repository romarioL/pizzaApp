<?php

namespace App\Config;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Connection
{
    private EntityManager $manager;
    public function connect(
        array $paths,
        bool $isDevMode,
        array $params
    ) : EntityManager {
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        return EntityManager::create($params, $config);
    }

   
}
