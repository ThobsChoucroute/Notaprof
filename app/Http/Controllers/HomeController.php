<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index')
                ->with('categories', Category::all())
                ->with('sentences', Auth::user()->sentences);
    }
}
