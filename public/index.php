<?php

use Csr\Framework\Kernel\Kernel;
use Csr\Framework\Template\FenomProvider;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/routes.php';

(new Kernel)->build(function () {
    /** @var Kernel $this */
    $this->builder->withConfig(__DIR__ . '/../..')
        ->withTemplate(
            __DIR__ . '/../src/views/',
            __DIR__ . '/../src/cache/',
            FenomProvider::class
        );
});
