<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Controllers\LoginController;

class HomeController extends BaseController
{


    private $_renderBase;
    public $login;
    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {

        if (empty($_SESSION['employee'])) {
            $this->login = new LoginController();
            $this->login->loadViewLogin();
        } else {
            $data = [
            ];
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/client/home', $data);
            $this->_renderBase->renderFooter();
        }
    }





}