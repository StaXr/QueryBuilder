<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure\Conditionals;

class Logical extends \SplEnum
{
    public const __default = 'AND';

    public const AND = 'AND';
    public const OR = 'OR';
}