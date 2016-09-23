<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Mun;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class IntMunController extends Controller
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
        $mun = Mun::where('type','international')->orderBy('id','desc')->get();

        // load the view and pass the nerds
        return View::make('admin.view_int_mun')
            ->with('mun', $mun);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('admin.form_int_mun');
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

        $name1 = $_FILES['path1']['name'];
        $name2 = $_FILES['path2']['name'];
        $name3 = $_FILES['path3']['name'];

        $test1 = pathinfo($name1, PATHINFO_FILENAME);
        $test2 = pathinfo($name2, PATHINFO_FILENAME);
        $test3 = pathinfo($name3, PATHINFO_FILENAME);
        $target_dir = "mun/";
        $original_name1 = $test1;
        $original_name2 = $test2;
        $original_name3 = $test3;
        $imageFileType1 = pathinfo($name1,PATHINFO_EXTENSION);
        $imageFileType2 = pathinfo($name2,PATHINFO_EXTENSION);
        $imageFileType3 = pathinfo($name3,PATHINFO_EXTENSION);
        //$target_file = $target_dir . basename($_FILES["path"]["name"]);

        $uploadOk1 = 1;
        $uploadOk2 = 1;
        $uploadOk3 = 1;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check1 = getimagesize($_FILES["path1"]["tmp_name"]);
            if($check1 !== false) {
                echo "File is an image - " . $check1["mime"] . ".";
                $uploadOk1 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk1 = 0;
            }
            $check2 = getimagesize($_FILES["path2"]["tmp_name"]);
            if($check2 !== false) {
                echo "File is an image - " . $check2["mime"] . ".";
                $uploadOk2 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk2 = 0;
            }
            $check3 = getimagesize($_FILES["path3"]["tmp_name"]);
            if($check3 !== false) {
                echo "File is an image - " . $check3["mime"] . ".";
                $uploadOk3 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk3 = 0;
            }
        }

        if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
            && $imageFileType1 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk1 = 0;
        }
        if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
            && $imageFileType2 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk2 = 0;
        }
        if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
            && $imageFileType3 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk3 = 0;
        }
        // Check if file already exists
        $i = 1;
        while (file_exists($target_dir.$test1.".".$imageFileType1)) {
            $test1 = (string)$original_name1.$i;
            $name1 = $test1.".".$imageFileType1;
            $i++;
        }
        while (file_exists($target_dir.$test2.".".$imageFileType2)) {
            $test2 = (string)$original_name2.$i;
            $name2 = $test2.".".$imageFileType2;
            $i++;
        }
        while (file_exists($target_dir.$test3.".".$imageFileType3)) {
            $test3 = (string)$original_name3.$i;
            $name3 = $test3.".".$imageFileType3;
            $i++;
        }
        $target_file1 = $target_dir.$name1;
        $target_file2 = $target_dir.$name2;
        $target_file3 = $target_dir.$name3;
        // Check file size
        if ($_FILES["path1"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk1 = 0;
        }
        if ($_FILES["path2"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk2 = 0;
        }
        if ($_FILES["path3"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk3 = 0;
        }
        // Allow certain file formats

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk1 == 0) {
            echo "Sorry, your file was not uploaded.";
            $target_file1='mun/blank.png';
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path1"]["tmp_name"], $target_file1)) {
                echo "The file ". basename( $_FILES["path1"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk2 == 0) {
            echo "Sorry, your file was not uploaded.";
            $target_file2='mun/blank.png';
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path2"]["tmp_name"], $target_file2)) {
                echo "The file ". basename( $_FILES["path2"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk3 == 0) {
            echo "Sorry, your file was not uploaded.";
            $target_file3='mun/blank.png';
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path3"]["tmp_name"], $target_file3)) {
                echo "The file ". basename( $_FILES["path3"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $target_file_final1 = "../../".$target_file1;
        $target_file_final2 = "../../".$target_file2;
        $target_file_final3 = "../../".$target_file3;

        Mun::create(array(
            'description' => $data['description'],
            'path1' => $target_file_final1,
            'path2' => $target_file_final2,
            'path3' => $target_file_final3,
            'id_author' => Auth::user()->id,
            'type' => $data['type']
        ));
        return redirect('admin/mun/international');

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
        $mun = Mun::where('id',$id)->first();

        // load the view and pass the nerds
        return View::make('admin.edit_int_mun')
            ->with('mun', $mun);

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
        $data = $request::all();

        $name1 = $_FILES['path1']['name'];
        $name2 = $_FILES['path2']['name'];
        $name3 = $_FILES['path3']['name'];

        $test1 = pathinfo($name1, PATHINFO_FILENAME);
        $test2 = pathinfo($name2, PATHINFO_FILENAME);
        $test3 = pathinfo($name3, PATHINFO_FILENAME);
        $target_dir = "mun/";
        $original_name1 = $test1;
        $original_name2 = $test2;
        $original_name3 = $test3;
        $imageFileType1 = pathinfo($name1,PATHINFO_EXTENSION);
        $imageFileType2 = pathinfo($name2,PATHINFO_EXTENSION);
        $imageFileType3 = pathinfo($name3,PATHINFO_EXTENSION);
        //$target_file = $target_dir . basename($_FILES["path"]["name"]);

        $uploadOk1 = 1;
        $uploadOk2 = 1;
        $uploadOk3 = 1;

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check1 = getimagesize($_FILES["path1"]["tmp_name"]);
            if($check1 !== false) {
                echo "File is an image - " . $check1["mime"] . ".";
                $uploadOk1 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk1 = 0;
            }
            $check2 = getimagesize($_FILES["path2"]["tmp_name"]);
            if($check2 !== false) {
                echo "File is an image - " . $check2["mime"] . ".";
                $uploadOk2 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk2 = 0;
            }
            $check3 = getimagesize($_FILES["path3"]["tmp_name"]);
            if($check3 !== false) {
                echo "File is an image - " . $check3["mime"] . ".";
                $uploadOk3 = 1;
            } else {
                echo "File is not an image.";
                $uploadOk3 = 0;
            }
        }

        if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
            && $imageFileType1 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk1 = 0;
        }
        if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
            && $imageFileType2 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk2 = 0;
        }
        if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
            && $imageFileType3 != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk3 = 0;
        }
        // Check if file already exists
        $i = 1;
        while (file_exists($target_dir.$test1.".".$imageFileType1)) {
            $test1 = (string)$original_name1.$i;
            $name1 = $test1.".".$imageFileType1;
            $i++;
        }
        while (file_exists($target_dir.$test2.".".$imageFileType2)) {
            $test2 = (string)$original_name2.$i;
            $name2 = $test2.".".$imageFileType2;
            $i++;
        }
        while (file_exists($target_dir.$test3.".".$imageFileType3)) {
            $test3 = (string)$original_name3.$i;
            $name3 = $test3.".".$imageFileType3;
            $i++;
        }
        $target_file1 = $target_dir.$name1;
        $target_file2 = $target_dir.$name2;
        $target_file3 = $target_dir.$name3;
        // Check file size
        if ($_FILES["path1"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk1 = 0;
        }
        if ($_FILES["path2"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk2 = 0;
        }
        if ($_FILES["path3"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk3 = 0;
        }
        // Allow certain file formats

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk1 == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path1"]["tmp_name"], $target_file1)) {
                echo "The file ". basename( $_FILES["path1"]["name"]). " has been uploaded.";
                Mun::where('id', $id)->update(array(
                    'path1' => "../../".$target_file1
                ));

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk2 == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path2"]["tmp_name"], $target_file2)) {
                echo "The file ". basename( $_FILES["path2"]["name"]). " has been uploaded.";
                Mun::where('id', $id)->update(array(
                    'path2' => "../../".$target_file2
                ));
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk3 == 0) {
            echo "Sorry, your file was not uploaded.";
            $target_file3='mun/blank.png';
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["path3"]["tmp_name"], $target_file3)) {
                echo "The file ". basename( $_FILES["path3"]["name"]). " has been uploaded.";
                Mun::where('id', $id)->update(array(
                    'path3' => "../../".$target_file3
                ));
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        Mun::where('id', $id)->update(array(
            'description' => $data['description'],
            'id_author' => Auth::user()->id,
            'type' => $data['type']
        ));

        return redirect('admin/mun/international');

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
        Mun::where('id', $id)->delete();
        return redirect('admin/mun/international');
    }
}
