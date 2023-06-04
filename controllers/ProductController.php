<?php

namespace controllers;

use app\Router;

class ProductController
{
    public function index(Router $router)
    {
        $router->renderView('products/index');
    }

    public function create()
    {
        echo "create PAGE";
    }
    public function update()
    {
        echo "update PAGE";
    }
    public function delete()
    {
        echo "delete PAGE";
    }
}
