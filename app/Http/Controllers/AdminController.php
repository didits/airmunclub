<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Img;
class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home/index');
    }

    public function contact()
    {
        // get all the nerds
        $contact = Contact::orderBy('id','desc')->get();

        // load the view and pass the nerds
        return View::make('admin.view_contact')
            ->with('contact', $contact);
    }

    public function gallery()
    {
        // get all the nerds
        $gallery = Img::where('type','gallery')->orderBy('id','desc')->get();

        // load the view and pass the nerds
        return View::make('admin.view_gallery')
            ->with('gallery', $gallery);
    }

    public function galleryCreate(Request $request){

        $data = $request::all();

        $name = $_FILES['path']['name'];
        $test = pathinfo($name, PATHINFO_FILENAME);
        $target_dir = "gallery/";
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
        Img::create(array(
            'path' => $target_file_final,
            'type' => 'gallery'
        ));
        return redirect('admin/gallery');
    }

    public function galleryDelete($id){
        //
        Img::where('id', $id)->delete();
        return redirect('admin/gallery');

    }

}
