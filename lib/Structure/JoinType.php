<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure;

use SplEnum;

class JoinType extends SplEnum
{
    public const __default = self::JOIN;

    public const INNER_JOIN = 'INNER JOIN';
    public const JOIN = self::INNER_JOIN;
    public const LEFT_OUTER_JOIN = 'LEFT JOIN';
    public const RIGHT_OUTER_JOIN = 'RIGHT JOIN';
    public const LEFT_JOIN = self::LEFT_OUTER_JOIN;
    public const RIGHT_JOIN = self::RIGHT_OUTER_JOIN;
}