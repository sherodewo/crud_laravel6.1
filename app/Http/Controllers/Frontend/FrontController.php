<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.orders.index');
    }

    public function seat(){
        return view('frontend.seats.index');
    }

   public function payment()
   {
       return view('frontend.payments.index');
   }
}
