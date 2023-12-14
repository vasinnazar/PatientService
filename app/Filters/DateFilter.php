<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class DateFilter implements Filter
{
    /**
     * filter via date
     */
     public function __invoke(Builder $query, $value, $property) : Builder
     {
         return $query->whereDate('created_at' , $value);
     }
}
