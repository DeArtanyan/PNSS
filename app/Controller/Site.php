<?php
namespace Controller;

use Couchbase\View;
use Src\View;
class Site
{
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['message' => 'index working']);
    }
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}
