<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure;

class Direction extends \SplEnum
{
    public const __default = 'ASC';

    public const ASC = 'ASC';
    public const DESC = 'DESC';
}