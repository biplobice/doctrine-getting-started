<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


// Create a simple "default" Doctrine ORM configuration
// For Annotations
$paths = [__DIR__."/src"];

// Or if you prefer XML or YML
// $paths = [__DIR__."/config/xml"];
// $paths = [__DIR__."/config/yaml"];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

// database configuration parameters
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'test',
);
$entityManager = EntityManager::create($dbParams, $config);