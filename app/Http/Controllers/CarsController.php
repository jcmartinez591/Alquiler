<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CarsController extends Controller
{
    public function index()
    {
        return view('page.rentcar');
//        $cars = Cars::withCount("reservas")->paginate(2);
//        return view("page.rentcar", compact("blogs"));
    }

}
