<?php

namespace Csr\App\Controllers;

use Csr\Framework\Http\HttpController;

class HomeController extends HttpController
{
    public function index()
    {
        return $this->view('home.twig');
    }
}
