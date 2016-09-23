<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Article;
use App\Material;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        // get all the nerds
        $data = Material::orderBy('id','desc')->get();

        // load the view and pass the nerds
        return View::make('admin.view_material')
            ->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('admin.form_material');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request::all();
        Material::create(array(
            'title' => $data['title'],
            'description' => $data['description'],
            'id_author' => Auth::user()->id,
            'link' => $data['link']
        ));
        return redirect('admin/material');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // get all the nerds
        $material= Material::where('id',$id)->first();

        // load the view and pass the nerds
        return View::make('admin.edit_material')
            ->with('material', $material);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request::all();
        Material::where('id', $id)->update(array(
            'title' => $data['title'],
            'description' => $data['description'],
            'id_author' => Auth::user()->id,
            'link' => $data['link']
        ));
        return redirect('admin/material');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Material::where('id', $id)->delete();
        return redirect('admin/material');

    }
}
