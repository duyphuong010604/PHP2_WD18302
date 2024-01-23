<?php

namespace App\Controllers;

use App\Core\RenderBase;

class Quanlitaikhoan extends BaseController
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
        $this->page();
    }

    function page()
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model
        $data = [
        ];
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/client/moi', $data);
        $this->_renderBase->renderFooter();
    }


}