<?php

namespace App\Repository\Exception\Database;

use App\Repository\Exception\ResourceNotFoundException;
use RuntimeException;

class DatabaseNotFoundException extends RuntimeException implements ResourceNotFoundException
{
}
