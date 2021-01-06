<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class Order extends Model
{
    use HasFactory;


    public function scopeFilter(Builder $builder, QueryFilter $filter){
        $filter->apply($builder);
    }
}
