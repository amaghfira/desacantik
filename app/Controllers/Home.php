<?php

namespace App\Controllers;
use App\Models\UploadModel;

class Home extends BaseController
{
    public function index()
    {
        
        // load views
        echo view("layout/header");
        echo view("layout/navbar");
        echo view("home");
        echo view("layout/footer");
    }


}
