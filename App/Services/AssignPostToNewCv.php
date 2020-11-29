<?php

namespace App\Services;

use App\Models\CV;

class AssignPostToNewCv
{
    public static function execute(array $post): CV
    {
        $cv = new CV($post['name'], $post['sname'], $post['email'], $post['phoneNumber']);
        $cv->setPitch($post['pitch']);
        $cv->setEducation($post['education']);
        $cv->setWorkExperience($post['experience']);
        $cv->setOther($post['other']);

        return $cv;
    }
}