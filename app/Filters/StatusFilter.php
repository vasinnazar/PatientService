<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class StatusFilter implements Filter
{
    //filter via status
    public function __invoke(Builder $query, $value, $property = null) : Builder
    {
        return $query->where('status' ,  $value);
    }
}

