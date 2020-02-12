<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Structure\Aggregate;

class Verb extends \SplEnum
{
    public const __default = self::GROUP_BY;

    public const GROUP_BY = 'GROUP BY';
    public const AVG    = 'AVG';
    public const AVERAGE  = self::AVG;
    public const COUNT = 'COUNT';
    public const JSON_ARRAYAGG = 'JSON_ARRAYAGG';
    public const JSON_OBJECTAGG = 'JSON_OBJECTAGG';
    public const MAX = 'MAX';
    public const MIN = 'MIN';
    public const STDDEV_POP = 'STDDEV_POP';
    public const STDDEV = self::STDDEV_POP;
    public const STD = self::STDDEV_POP;
    public const STDDEV_SAMP = 'STDDEV_SAMP';
    public const SUM = 'SUM';
    public const VAR_POP = 'VAR_POP';
    public const VAR_SAMP = 'VAR_SAMP';
    public const VARIANCE = 'VARIANCE';
    public const BIT_AND = 'BIT_AND';
    public const BIT_OR = 'BIT_OR';
    public const BIT_XOR = 'BIT_XOR';

}