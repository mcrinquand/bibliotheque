<?php

namespace App\Repository;

use App\Entity\Book;
use App\Repository\Exception\Book\BookNotFoundException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class BookRepository extends ServiceEntityRepository
{
    /**
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Book::class);
    }

    /**
     * @param int $id
     *
     * @return Book
     * @throws BookNotFoundException
     */
    public function getById(int $id): Book
    {
        $book = $this->find($id);
        if (!$book instanceof Book) {
            throw new BookNotFoundException();
        }

        return $book;
    }
}
