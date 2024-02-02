<?php

namespace App\Controllers;

use App\Core\RenderBase;

class HomeController extends BaseController
{

    private $_renderBase;

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
            $this->load->render('layouts/pages/login');
        } else {
            $data = [
            ];
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/client/home', $data);
            $this->_renderBase->renderFooter();
        }

    }





}