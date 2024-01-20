<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class HomeController
{

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {

    }

    function detail($id) {
        echo $id;
    }

}