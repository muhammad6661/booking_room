<?php

namespace App\Core;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\MissingMappingDriverImplementation;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Setup;
use Gedmo\Timestampable\TimestampableListener;

class Doctrine
{
    public EntityManager $em;

    /**
     * @throws MissingMappingDriverImplementation
     * @throws Exception
     */
    public function __construct()
    {
        $dbParams = Config::get("db");
        $isDevMode = (bool)getenv('MODE_DEV');
        $pathEntity = [dirname(__DIR__) . '/Models/Entity'];
        $config = ORMSetup::createAttributeMetadataConfiguration($pathEntity, $isDevMode);

        $connection = DriverManager::getConnection($dbParams, $config);
        $this->em = new  EntityManager($connection, $config);

        $timestampableListener = new TimestampableListener();
        $timestampableListener->setAnnotationReader($this->em->getConfiguration()->getAnnotationReader());

        $eventManager = $this->em->getEventManager();
        $eventManager->addEventSubscriber($timestampableListener);
        }

}