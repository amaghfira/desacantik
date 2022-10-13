<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;

class Download extends Controller
{
    public function __construct()
    {
        $this->response = \Config\Services::response();
    }
    public function index()
    {
        return $this->response->download('template_descan.xlsx',null);
    }

}
