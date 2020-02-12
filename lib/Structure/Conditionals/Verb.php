<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure\Conditionals;

use SplEnum;

class Verb extends SplEnum
{
    public const __default = 'WHERE';

    public const WHERE = 'WHERE';
    public const HAVING = 'HAVING';
}