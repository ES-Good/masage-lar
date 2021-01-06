<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Filters\OrderFilter;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request, OrderFilter $filter){
        //$query = Order::query();
        //$orders = (new OrderFilter($query,$request))->apply()->get();
        $orders = Order::filter($filter)->get();
        //$orders = Order::whereDate('created_at', '=', Carbon::yesterday())->get();
        //$orders = Order::where('name','like','%Mark%')->get();

        //$query->where('name','like', "%MRs%");

        //$orders = Carbon::today()->toDateString();
        //$orders->where('name','like', 't')->get();
//        if ($request->has('name')){
//            $orders->where('name','like',"%$request->name%");
//        }
        //$orders = $query->get();
        return response()->json($orders);
    }
}
