<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StripeController extends Controller
{
    //
    public function stripe(){
        return view('stripe');
    }
}
