<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Models\EmployeeModel;
use App\Reponsitories\Validation;
use App\Helpper\Mailer;

class QuenmatkhauController extends BaseController
{

    use Validation;

    public $information = array();
    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    public function loadViewQmk()
    {
        $this->load->render('layouts/pages/quenmatkhau');
    }

    public function loadViewLogin()
    {
        $this->load->render('layouts/pages/login');
    }


    public function handleQmk()
    {
        $employeeModel = new EmployeeModel();
        $username = isset($_POST['username']) ? trim($_POST['username']) : "";
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
        if ($this->emptyValidation($email) === false || $this->emptyValidation($username) === false) {
            $this->errors['empty'] = "Vui lòng điền đầy đủ tất cả các thông tin!";
            $this->load->render('layouts/pages/quenmatkhau', $this->errors);
        } else if ($this->emailValidation($email) === false) {
            $this->errors['email'] = "Vui lòng điền email hợp lệ!";
            $this->load->render('layouts/pages/quenmatkhau', $this->errors);
        } else {
            $employee = $employeeModel->checkUserExistEmail($username, $email);
            if (!$employee || $employee === false) {
                $this->errors['noExit'] = 'Không tìm thấy tài khoản có cùng tên đăng nhập và email!';
                $this->load->render('layouts/pages/quenmatkhau', $this->errors);
            } else {
                $this->errors['noErrors'] = 1;
                // $this->load->render('layouts/pages/quenmatkhau', $this->errors);
                // // Gửi mail
                $this->information['first_name'] = $employee['first_name'];
                $this->information['username'] = $employee['username'];
                $this->information['id'] = $employee['id'];
                $this->information['email'] = $employee['email'];
                $passwordNew = substr(md5(rand(0, 99999999)), 0, 11);
                $this->information['password'] = $passwordNew;
                $updateNewPassword = $employeeModel->update($this->information['id'], ['password' => $passwordNew], "id");
                // var_dump($updateNewPassword);
                if ($updateNewPassword === false || !$updateNewPassword) {
                    // echo 'toan';
                    $this->load->render('layouts/pages/quenmatkhau', $this->errors);
                } else {
                    // echo "xac dinh";
                    extract($this->information);
                    $mailer = new Mailer($email, $first_name, $passwordNew, $username);
                    $this->load->render('layouts/pages/quenmatkhau', $this->errors);
                }
            }
        }
    }
}