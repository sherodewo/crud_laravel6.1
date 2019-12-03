<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data = Location::all();
        return view('frontend.orders.index',compact('data'));
    }
}
