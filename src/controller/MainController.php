<?php

namespace App\controller;

class MainController
{

    public function home()
    {

        require_once "../templates/main/home.php";
    }

    public function about()
    {

        require_once "../templates/main/about.php";
    }

}