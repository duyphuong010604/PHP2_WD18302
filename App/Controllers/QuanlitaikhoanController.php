<?php

namespace App\Controllers;

use App\Core\RenderBase;

class QuanlitaikhoanController extends BaseController
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
        $this->Quanlitaikhoan();
    }

    function Quanlitaikhoan()
    {
        $this->homePage();
    }

    function homePage()
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model
        $data = [
        ];
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/quanlitaikhoan', $data);
        $this->_renderBase->renderFooter();
    }


    function detail($id)
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model

    }

}