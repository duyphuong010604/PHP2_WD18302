<?php

namespace App\Controllers;

use App\Core\RenderBase;

class LoginController extends BaseController
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
        $this->Login();
    }

    function Login()
    {
        $this->homePage();
    }

    function homePage()
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model
        $data = [
        ];

        $this->load->render('layouts/client/login', $data);

    }



    function detail($id)
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model

    }


    public function handleLogin()
    {
        echo $_POST['username'];
    }

}