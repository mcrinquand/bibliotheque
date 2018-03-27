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

class ConvertHistoryCommand extends Command
{
    /**
     * @var string
     */
    private $rootDir;

    /**
     * @param null|string $name
     * @param string $rootDir
     */
    public function __construct(
        ?string $name = null,
        string $rootDir
    ) {
        parent::__construct($name);
        $this->rootDir = $rootDir;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:convert-history')
            ->setDescription('Converts the book history from DVBiblio')
            ->addArgument('path', InputArgument::REQUIRED, 'The path to the file containing books data')
            ->addArgument('path_to_new_file', InputArgument::REQUIRED, 'The path to the new file to create');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start conversion');

        $content = '';

        $fileName = sprintf('%s/files_to_encode/%s', $this->rootDir, $input->getArgument('path'));
        if (!file_exists($fileName)) {
            $output->writeln(sprintf('File is not at : %s', $fileName));
            $output->writeln('End conversion');

            exit;
        }

        $handle = fopen($fileName, 'r');
        $handleWrite = fopen(sprintf('%s/files_to_import/%s', $this->rootDir, $input->getArgument('path_to_new_file')), 'w+');
        $nextLine = true;
        while (($line = fgets($handle)) !== false) {
            $line = str_replace('"', ':coma:', $line);
            if ($nextLine) {
                $line = '"' . $line;
            }
            $nextLine = true;
            // process the line read.
            if (substr($line, -3) !== ";\r\n") {
                $nextLine = false;
            }

            if ($nextLine) {
                $line = str_replace(";\r\n", ";\"\r\n", $line);
            }
            $line = str_replace(';', '";"', $line);

            $line = str_replace(':coma:', '\"', $line);

            $content .= $line;
        }

        fclose($handle);

        fwrite($handleWrite, utf8_encode($content));
        fclose($handleWrite);

        $output->writeln('End conversion');
    }
}
