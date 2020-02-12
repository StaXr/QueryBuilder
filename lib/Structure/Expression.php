<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure;

use StaXr\QueryBuilder\Interfaces\Expression as ExpressionInterface;

class Expression implements ExpressionInterface
{
    public bool $distinct = false;
}