<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Interfaces;

use StaXr\QueryBuilder\Structure\Conditionals\Verb;

interface Condition
{
    public function createFrom(Verb $verb, Expression $expr): Condition;
    public function and(Condition $condition): Condition;
    public function or(Condition $condition): Condition;
}