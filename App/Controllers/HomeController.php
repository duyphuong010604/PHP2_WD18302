<?php

namespace App\Controllers;

class HomeController{

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
        echo "HIhi";
    }

    function detail($id) {
        echo $id;
    }

}