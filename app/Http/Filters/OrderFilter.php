<?php

namespace App\Http\Filters;

use Illuminate\Support\Carbon;
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

    public function date($value){
        //$this->builder->whereDate('created_at','=', $value);
        $this->builder->whereDate('created_at','>=', Carbon::parse('2020-12-30 00:00:00'))->whereDate('created_at','<=', Carbon::parse('2021-01-01 00:00:00'));
        //$this->builder->whereBetween('created_at',[Carbon::yesterday(),Carbon::now()]);
    }
}
