<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;
use App\Reponsitories\Validation;


class LoginController extends BaseController
{
    use Validation;


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

        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/pages/login');
        $this->_renderBase->renderFooter();
    }


    public function handleLogin()
    {

        // $user = $_POST["email"];
        // $password = trim($_POST['password']);
        // $check = $this->lengthValidation(3, 7, $password);
        // if ($this->lengthValidation(3, 7, $password) === false) {
        //     $this->errors['password'] = "ko dc de trong";
        //     $this->_renderBase->renderHeader();
        //     $this->load->render('layouts/client/pages/login', $this->errors);
        //     $this->_renderBase->renderFooter();
        // } else {
        //     $this->resetErrors();
        //     echo "oki r do";
        //     var_dump($this->errors);
        // }

        // validation form
        // kiểm tra trước rồi mới new UserModel();
        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);
        if (!$user) {
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
        }

        //xác thực
        // if (password_verify($_POST['password'], $user['password'])) {
        //     // xử lý session
        //     $_SESSION['user'] = $user;

        // }
        else {
            $_SESSION['user'] = $_POST["email"];
        }

        var_dump($_SESSION['user']);

    }



    public function logout()
    {
        unset($_SESSION['user']);
    }


}