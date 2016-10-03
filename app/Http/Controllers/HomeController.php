<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use App\Article;
use App\Material;
use App\Mun;
use App\Contact;
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

    public function about()
    {
        return view('home/about');
    }

    public function faq()
    {
        return view('home/faq');
    }

    public function event_calendar()
    {
        return view('home/event_calendar');
    }

    public function posting($id)
    {
        $article=Article::where('id', $id)->first();
        // load the view and pass the nerds
        return View::make('home.post')
            ->with('article', $article);
    }

    public function member()
    {
        $article=Article::where('type', 'member')->orderBy('id','desc')->get();
        $article->judul = "Member Page";
        // load the view and pass the nerds
        return View::make('home.member_page')
            ->with('article', $article);
    }

    public function media_coverage()
    {
        $article=Article::where('type', 'media')->orderBy('id','desc')->get();
        $article->judul = "Media Coverage";
        // load the view and pass the nerds
        return View::make('home.member_page')
            ->with('article', $article);
    }

    public function material()
    {
        $material=Material::orderBy('id','desc')->get();
        // load the view and pass the nerds
        return View::make('home.material')
            ->with('material', $material);
    }

    public function natmun($id)
    {
        $mun=Mun::where('id', $id)->first();
        // load the view and pass the nerds
        return View::make('home.nat_mun')
            ->with('mun', $mun);
    }

    public function intmun($id)
    {
        $mun=Mun::where('id', $id)->first();
        // load the view and pass the nerds
        return View::make('home.nat_mun')
            ->with('mun', $mun);
    }

    public function contact()
    {
        return view('home/contact');
    }

    public function contact_submit(Request $request)
    {
        //
        $data = $request::all();
        Contact::create(array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ));
        return redirect('contact');

    }



}
