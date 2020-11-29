<?php

namespace App\Controllers;

use App\Models\CV;
use App\Repositories\CvRepository;
use App\Services\AssignPostToNewCv;

class ImageController
{
    public function show(array $vars)
    {
        $repository = new CvRepository('cvs');
        $cv = $repository->getOne($vars['id']);

        return require_once __DIR__ . '/../Views/ImageShowView.php';
    }

    public function upload(array $vars)
    {

        $msg='';

        $repository = new CvRepository('cvs');
        $cv = $repository->getOne($vars['id']);

        $name = $vars['id']."_".$_FILES["fileToUpload"]["name"];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($name);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $msg .=  "File is an image - " . $check["mime"] . ". ";
                $uploadOk = 1;
            } else {
                $msg .=  "File is not an image. ";
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            $msg .= "Sorry, file already exists. ";
            $uploadOk = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $msg .= "Sorry, your file is too large. ";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $msg .= "Sorry, only JPG, JPEG, PNG files are allowed. ";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            $msg .= "Sorry, your file was not uploaded. ";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                //upload to db
                $cv->setImage($target_dir.$name);
                $repository->storeImage($cv);

                $msg .= "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded. ";
            } else {
                $msg .= "Sorry, there was an error uploading your file. ";
            }
        }

        return require_once __DIR__ . '/../Views/ImageUploadedView.php';

    }

}