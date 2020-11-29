<?php

namespace App\Controllers;

use App\Models\CV;
use App\Repositories\CvRepository;
use App\Services\AssignPostToNewCv;

class CvController
{
    public function index()
    {
        $repository = new CvRepository('cvs');
        $allCVs = $repository->getAll();

        return require_once __DIR__ . '/../Views/IndexView.php';
    }

    public function add()
    {

        return require_once __DIR__ . '/../Views/AddView.php';
    }

    public function save()
    {

        $repository = new CvRepository('cvs');

        $cv = AssignPostToNewCv::execute($_POST);

        $repository->storeOne($cv);

        $cv->setId($repository->getId($cv));

        header('Location: /');
    }

    public function about(array $vars)
    {
        $repository = new CvRepository('cvs');
        $cv = $repository->getOne($vars['id']);

        return require_once __DIR__ . '/../Views/AboutView.php';
    }

    public function edit(array $vars)
    {
        $repository = new CvRepository('cvs');
        $cv = $repository->getOne($vars['id']);

        return require_once __DIR__ . '/../Views/EditView.php';
    }

    public function update(array $vars)
    {
        $repository = new CvRepository('cvs');

        $cv = AssignPostToNewCv::execute($_POST);
        $cv->setId($vars['id']);


        $repository->updateStored($cv);

        header("Location: /about/" . $vars['id']);

    }


}