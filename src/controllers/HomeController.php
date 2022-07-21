<?php

namespace App\Controllers;

use Csr\Framework\Http\HttpController;

class HomeController extends HttpController
{
    public function index(): string
    {
        return '<h1>Welcome to CSR Framework</h1>';
    }
}