<?php

use Csr\App\Controllers\HomeController;
use Csr\Framework\Router\Route;

Route::get('/', [HomeController::class, 'index']);
Route::storage('/assets/{path}', __DIR__ . '/../src/assets/');
