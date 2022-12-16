<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class YearScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->whereYear('date', Carbon::now()->year);
    }

}
