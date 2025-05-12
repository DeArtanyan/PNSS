<?php
declare(strict_types=1);
    try{
        $app = require __DIR__ . '/../core/bootstrap.php';
        $app->run();
    } catch(\Throwable $exception){
        echo '<pre>';
        print_r($exception);
        echo '</pre>';
    }