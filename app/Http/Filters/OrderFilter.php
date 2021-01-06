<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderFilter extends QueryFilter
{

   public function name($value){
       $this->builder->where('name','like',"%$value%");
   }

    public function phone($value){
        $this->builder->where('phone','like',"%$value%");
    }

    public function status($value){
        $this->builder->where('status',$value);
    }
}
