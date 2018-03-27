<?php

namespace App\Command;

use App\Entity\Book;
use App\Entity\Database;
use App\Fixtures\Normalizer\Serializer;
use App\Repository\Exception\Database\DatabaseNotFoundException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportHistoryCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var string
     */
    private $rootDir;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param null|string $name
     * @param EntityManagerInterface $manager
     * @param string $rootDir
     * @param Serializer $serializer
     */
    public function __construct(
        ?string $name = null,
        EntityManagerInterface $manager,
        string $rootDir,
        Serializer $serializer
    ) {
        parent::__construct($name);
        $this->manager = $manager;
        $this->rootDir = $rootDir;
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:import-history')
            ->setDescription('Imports the book history from DVBiblio')
            ->addArgument('database', InputArgument::REQUIRED, 'The database id on which you want to import data')
            ->addArgument('file', InputArgument::REQUIRED, 'The name of the file containing books data');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start import on database');

        try {
            $database = $this->manager->getRepository(Database::class)->getById((int)$input->getArgument('database'));

            $file = fopen(sprintf('%s/file_to_import/%s', $this->rootDir, $input->getArgument('path')), 'r');

            while (($data = fgetcsv($file, 1000000, ";")) !== false) {
                if (count($data) < 41) {
                    continue;
                }

                /** @var Book $book */
                $book = $this->serializer->denormalize($data, Book::class);
                $book->setDatabase($database);
                $output->write('.');

                $this->manager->persist($book);
            }

            $this->manager->flush();
        } catch (DatabaseNotFoundException $e) {
            $output->writeln('Database unknwown.');
        }

        $output->writeln('End import on database');
    }
}
