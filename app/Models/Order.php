<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class Order extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    public function createOrder($name,$phone,$summ,$city){
        $this->name = $name;
        $this->phone = $phone;
        $this->status = 'new';
        $this->summa = $summ;
        $this->city = $city;
        $this->save();

    }
    public function scopeFilter(Builder $builder, QueryFilter $filter){
        $filter->apply($builder);
    }
}
