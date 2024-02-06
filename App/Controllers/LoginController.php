<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\EmployeeModel;
use App\Reponsitories\Validation;


class LoginController extends BaseController
{

    use Validation;
    public $home;

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
        $this->load->render('layouts/pages/login', $this->errors);
    }

    public function loadViewHome()
    {
        if (empty($_SESSION['employee'])) {
            $this->load->render('layouts/pages/login');
        }
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/home');
        $this->_renderBase->renderFooter();
    }


    public function handleLogin()
    {
        $emplouyeeModel = new EmployeeModel();
        if (isset($_POST['login'])) {
            $username = isset($_POST['username']) ? trim($_POST['username']) : "";
            $password = isset($_POST['password']) ? trim($_POST['password']) : "";
            if ($this->emptyValidation($password) === false || $this->emptyValidation($username) === false) {
                $this->errors['empty'] = "Vui lòng điền đầy đủ tất cả các thông tin!";
                $this->load->render('layouts/pages/login', $this->errors);
            } else if ($this->lengthValidation(6, 12, $password) === false) {
                $this->errors['length'] = "Vui lòng điền mật khẩu từ 6 - 12 ký tự!";
                $this->load->render('layouts/pages/login', $this->errors);
            } else {
                $employee = $emplouyeeModel->checkUserExist($username, $password);
                if (!$employee || $employee === false) {
                    $this->errors['noExit'] = 'Không tìm thấy tài khoản hoặc tên đăng nhập cùng với mật khẩu không hợp lệ!';
                    $this->load->render('layouts/pages/login', $this->errors);
                } else {
                    $this->home = new HomeController();
                    $this->home->homePage();
                    $_SESSION['employee'] = $employee['username'];
                    $this->resetErrors();
                    $this->loadViewHome();
                }
            }
        } else {
            $this->loadViewLogin();
        }
    }

    public function logout()
    {
        unset($_SESSION['employee']);
        $this->loadViewLogin();
    }


}