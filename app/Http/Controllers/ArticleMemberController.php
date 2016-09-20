<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ArticleMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // get all the nerds
        $article = Article::all();

        // load the view and pass the nerds
        return View::make('admin.view_member')
            ->with('article', $article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('admin.form_member');
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

        $name = $_FILES['path']['name'];
        $test = pathinfo($name, PATHINFO_FILENAME);
        $target_dir = "article/";
        $original_name = $test;
        $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
        //$target_file = $target_dir . basename($_FILES["path"]["name"]);

        $uploadOk = 1;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["path"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if file already exists
        $i = 1;
        while (file_exists($target_dir.$test.".".$imageFileType)) {
            $test = (string)$original_name.$i;
            $name = $test.".".$imageFileType;
            $i++;
        }
        $target_file = $target_dir.$name;
        // Check file size
        if ($_FILES["path"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["path"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $target_file_final = "../../".$target_file;
        Article::create(array(
            'title' => $data['title'],
            'description' => $data['description'],
            'path' => $target_file_final,
            'id_author' => Auth::user()->id,
            'type' => $data['type']
        ));
        return redirect('admin/article');

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
        $article = Article::find($id)->first();

        // load the view and pass the nerds
        return View::make('admin.edit_member')
            ->with('article', $article);

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

        $name = $_FILES['path']['name'];
        $test = pathinfo($name, PATHINFO_FILENAME);
        $target_dir = "article/";
        $original_name = $test;
        $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
        //$target_file = $target_dir . basename($_FILES["path"]["name"]);

        $uploadOk = 1;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["path"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if file already exists
        $i = 1;
        while (file_exists($target_dir.$test.".".$imageFileType)) {
            $test = (string)$original_name.$i;
            $name = $test.".".$imageFileType;
            $i++;
        }
        $target_file = $target_dir.$name;
        // Check file size
        if ($_FILES["path"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["path"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        $target_file_final = "../../".$target_file;
        Article::where('id', $id)->update(array(
            'title' => $data['title'],
            'description' => $data['description'],
            'path' => $target_file_final,
            'id_author' => Auth::user()->id,
            'type' => $data['type']
        ));
        return redirect('admin/article');

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
        Article::where('id', $id)->delete();
        return redirect('admin/article');
    }
}
