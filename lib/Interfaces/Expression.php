<?php

declare(strinct_types=1);

namespace StaXr\QueryBuilder\Interfaces;

interface Expression
{
    public function setVerb(Verb $verb): Expression;
    public function setStatement(Statement $statement);
}