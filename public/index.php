<?php

use Csr\Framework\Kernel\Kernel;
use Csr\Framework\Router\Route;

require_once __DIR__ . '/../vendor/autoload.php';

Route::view('/', 'home.twig');
Route::storage('/assets/{path}', __DIR__ . '/../src/assets/');

Kernel::build(function () {
    /** @var Kernel $this */
    $this->config(__DIR__ . '/../')
        ->template(__DIR__ . '/../src/views/');
});