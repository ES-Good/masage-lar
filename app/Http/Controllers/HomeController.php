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
    public function home()
    {
        return view('home');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function interior()
    {
        return view('interior');
    }
    public function questionnaires()
    {
        return view('questionnaires');
    }
    public function services()
    {
        return view('services');
    }
    public function stocks()
    {
        return view('stocks');
    }
    public function quiz()
    {
        return view('quiz');
    }
}
