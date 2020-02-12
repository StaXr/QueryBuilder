<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Interfaces;

use StaXr\QueryBuilder\Structure\Aggregate\Verb as AggregateVerb;
use StaXr\QueryBuilder\Structure\Expression;
use StaXr\QueryBuilder\Structure\Direction;
use StaXr\QueryBuilder\Structure\Type;

interface Query
{
    public function setType(Type $type): Query;
    public function setCondition(Condition $condition): Query;
    public function setOrder(Field $field, Direction $direction): Query;
    public function setLimit(int $limit, ?int $offset = 0);
    public function setAggregation(AggregateVerb $verb, Expression $expr);
}