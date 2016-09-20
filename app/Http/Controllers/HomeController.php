<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use App\Article;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/index');
    }

    public function posting($id)
    {
        $article=Article::where('id', $id)->first();
        // load the view and pass the nerds
        return View::make('home.post')
            ->with('article', $article);
    }

}
