<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Interfaces;

use StaXr\QueryBuilder\Structure\Operator;

interface Statement
{
    public function setField(Field $field): Statement;
    public function setOperator(Operator $operator): Statement;
    public function setValue(Value $value): Statement;
}