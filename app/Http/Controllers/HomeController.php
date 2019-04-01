<?php

namespace PSU\Http\Controllers;

use Illuminate\Http\Request;
use PSU\Requisition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $requisitions = Requisition::all();
        return view('home', [
            'requisitions' => $requisitions,
            'title' => 'Home'
        ]);
    }
}
