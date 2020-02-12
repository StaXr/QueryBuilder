<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure\Conditionals;

use SplEnum;
use StaXr\QueryBuilder\Interfaces\Verb as VerbInterface;

class Verb extends SplEnum implements VerbInterface
{
    public const __default = 'WHERE';

    public const WHERE = 'WHERE';
    public const HAVING = 'HAVING';
}