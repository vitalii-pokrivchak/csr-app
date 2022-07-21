<?php

use Csr\Framework\Kernel\Kernel;
use Csr\Framework\Router\Route;
use App\Controllers\HomeController;

# Load composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

# Define route
Route::get('/', [HomeController::class , 'index']);

# Build application and run
Kernel::build();