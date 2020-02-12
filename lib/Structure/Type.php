<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure;

class Type extends \SplEnum
{
    public const __default = 'SELECT';

    public const SELECT = 'SELECT';
    public const TRANSACTION = 'TRANSACTION';
}