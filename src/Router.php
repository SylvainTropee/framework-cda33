<?php

namespace App;

use App\controller\MainController;
use App\controller\ProductController;
use App\controller\UserController;

class Router
{

    public function routeMe()
    {

        $url = $_SERVER['REQUEST_URI'];

        match ($url) {
            "/" => (new MainController())->home(),
            "/about" => (new MainController())->about(),
            "/inscription" => (new UserController())->register(),
            "/produit/nouveau" => (new ProductController())->addProduct(),
            "/produit/liste" => (new ProductController())->listProduct(),
            //default => (new MainController())->home()
        };

    }

}