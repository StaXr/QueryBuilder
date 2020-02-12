<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure;

use StaXr\QueryBuilder\Interfaces\Verb as VerbInterface;

class Verb extends \SplEnum implements VerbInterface
{
    public const __default = self::SELECT;

    public const SELECT = 'SELECT';
}