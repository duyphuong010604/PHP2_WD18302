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


    public function loadViewRegister()
    {

        if (!empty($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/pages/register');
        $this->_renderBase->renderFooter();
    }


    public function handleRegister()
    {
        // validation form
        // kiểm tra trước rồi mới new UserModel();

        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);


        if ($user) {

        }

        $userModel->registerUser($_POST);

    }



}