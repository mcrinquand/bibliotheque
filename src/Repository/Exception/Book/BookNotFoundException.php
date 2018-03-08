<?php

namespace App\Repository\Exception\Book;

use App\Repository\Exception\ResourceNotFoundException;
use RuntimeException;

class BookNotFoundException extends RuntimeException implements ResourceNotFoundException
{
}
