<?php

namespace App\Fixtures\Normalizer;

use Symfony\Component\Serializer\Serializer as SymfonySerializer;

class Serializer extends SymfonySerializer
{
    public function __construct(\IteratorAggregate $normalizers, array $encoders = [])
    {
        parent::__construct(iterator_to_array($normalizers), $encoders);
    }
}
