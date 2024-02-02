<?php

namespace App\Controllers;

use App\Core\RenderBase;

class LoginController extends BaseController
{



    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }


    public function loadViewLogin()
    {

        if (!empty($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        $this->load->render('layouts/pages/login');

    }


    public function handleLogin()
    {

    }



    public function logout()
    {
        unset($_SESSION['user']);
    }


}