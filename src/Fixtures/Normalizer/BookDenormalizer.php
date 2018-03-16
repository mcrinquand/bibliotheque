<?php

namespace App\Fixtures\Normalizer;

use App\Entity\Book;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class BookDenormalizer implements DenormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        /** @var Book $book */
        $book = new $class;
        $book->setTitle($data[0]);
        $book->setSubTitle($data[1]);
        $book->setAuthor($data[2]);
        $book->setVolume((int) $data[3]);
        $book->setVolumeNumber((int) $data[4]);
        $book->setRate($data[5]);
        $book->setIsbn($data[6]);
        $book->setPublicationYear((int) $data[7]);
        $book->setPublishingHouse($data[8]);
        $book->setCollection($data[9]);
        $book->setNumberOfPages((int) $data[10]);
        $book->setFormat($data[11]);
        $book->setCondition($data[12]);
        $book->setLocation($data[13]);
        $book->setSecondLocation($data[14]);
        $book->setThirdLocation($data[15]);
        $book->setTheme($data[16]);
        $book->setType($data[17]);
        $book->setFirstKeyword($data[18]);
        $book->setSecondKeyword($data[19]);
        $book->setThirdKeyword($data[20]);
        $book->setFourthKeyword($data[21]);
        $book->setFifthKeyword($data[22]);
        $book->setSixthKeyword($data[23]);
        $book->setSeventhKeyword($data[24]);
        $book->setEighthKeyword($data[25]);
        $book->setBuyingYear((int) $data[26]);
        $book->setBuyingPrice((int) $data[27]);
        $book->setBuyingPlace($data[28]);
        $book->setOriginalLanguage($data[29]);
        $book->setOriginalCountry($data[30]);
        $book->setOriginalTitle($data[31]);
        $book->setTranslator($data[32]);
        $book->setFirstPublicationYear((int) $data[33]);
        $book->setFirstPublishingHouse($data[34]);
//        $book->setFirstPersonalizedField($data[35]); book lend
//        $book->setFirstPersonalizedField($data[36]); book lend
//        $book->setFirstPersonalizedField($data[37]); book lend
        $book->setFirstPersonalizedField($data[38]);
        $book->setSecondPersonalizedField($data[39]);
        $book->setThirdPersonalizedField($data[40]);
        $book->setFourthPersonalizedField($data[41]);
        $book->setComment($data[42]);

        return $book;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
         return $type === Book::class;
    }
}
