<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;

class ResgisterController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();

    }


    public function loadViewResgister()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/pages/resgister');
        $this->_renderBase->renderFooter();
    }

    public function handleLogin()
    {
        // validation form
        // kiểm tra trước rồi mới new UserModel();
        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);
        if (!$user) {
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi

        }

        //xác thực
        if (password_verify($_POST['password'], $user['matkhau'])) {
            // xử lý session
            $_SESSION['user'] = $user['tendangnhap'];

        } else {


        }



    }



}