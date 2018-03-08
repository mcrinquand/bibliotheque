<?php

namespace App\Repository;

use App\Entity\Database;
use App\Repository\Exception\Database\DatabaseNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class DatabaseRepository extends ServiceEntityRepository
{
    /**
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Database::class);
    }

    /**
     * @param int $id
     *
     * @return Database
     * @throws DatabaseNotFoundException
     */
    public function getById(int $id): Database
    {
        $database = $this->find($id);
        if (!$database instanceof Database) {
            throw new DatabaseNotFoundException();
        }

        return $database;
    }
}
