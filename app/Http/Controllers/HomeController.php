<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function show()
    {
        $vehicles = Vehicle::where('status_id', '=', '1')->paginate(5);

        return view('public', compact('vehicles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
