<?php

namespace App\Fixtures\Normalizer;

use App\Entity\Book;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class RestaurantDenormalizer implements DenormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        /** @var Book $book */
        $book = new $class;
        $book->setTitle($data[1]);
        $book->setSubTitle($data[0]);
        $book->setAuthor($data[0]);
        $book->setPublicationYear($data[0]);
        $book->setCondition($data[0]);
        $book->setVolume($data[0]);
        $book->setPublishingHouse($data[0]);
        $book->setCollection($data[0]);
        $book->setNumberOfPages($data[0]);
        $book->setFormat($data[0]);
        $book->setLocation($data[0]);
        $book->setTheme($data[0]);
        $book->setType($data[0]);
        $book->setFirstKeyword($data[0]);
        $book->setSecondKeyword($data[0]);
        $book->setThirdKeyword($data[0]);
        $book->setFourthKeyword($data[0]);
        $book->setFifthKeyword($data[0]);
        $book->setSixthKeyword($data[0]);
        $book->setSeventhKeyword($data[0]);
        $book->setEighthKeyword($data[0]);
        $book->setBuyingYear($data[0]);
        $book->setBuyingPlace($data[0]);
        $book->setBuyingPrice($data[0]);
        $book->setBuyingComment($data[0]);
        $book->setFirstPersonalizedField($data[0]);
        $book->setSecondPersonalizedField($data[0]);
        $book->setThirdPersonalizedField($data[0]);
        $book->setFourthPersonalizedField($data[0]);
        $book->setComment($data[0]);
        $book->setDatabase($data[0]);

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
