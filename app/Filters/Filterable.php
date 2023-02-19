<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{

    /**
     * @param Builder $builder
     * @param FilterInterface $filter
     */

    public function scopeFilter(Builder $builder ,FilterInterface $filter)
    {
        $filter->apply($builder);
        return $builder;
    }
}
