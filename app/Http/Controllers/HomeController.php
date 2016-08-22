<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use Auth;

use input;  
use View;
use Request;

class HomeController extends Controller
{


    public function event()
    {
        return view('home');
    }


}
