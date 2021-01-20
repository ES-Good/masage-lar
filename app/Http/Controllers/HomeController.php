<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store (Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'phone' => 'required|regex:/^\d(\d{3})(\d{3})(\d{4})$/',
            'checkbox' => 'required|in:1'
        ]);
        $name = $request->input('name');
        $phone = $request->input('phone');
        return $request->all();
        //\Mail::to(env('MAIL_TO_ADDRESS'))->send(new SendMail($name,$phone));
    }

}
