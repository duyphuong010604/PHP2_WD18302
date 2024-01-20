<?php

namespace App\Core;

use App\Controllers\BaseController;


class RenderBase extends BaseController
{

    public function __construct()
    {

        parent::__construct();

    }

    /**
     * @throws Exception
     */
    public function renderHeader(){

        $this->load->render('layouts/client/header');
    }

    /**
     * @throws Exception
     */
    public function renderFooter(){
        $this->load->render('layouts/client/footer');
    }
}