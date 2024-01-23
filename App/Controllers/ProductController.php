<?php
namespace App\Controllers;

use App\Controllers\BaseController;




class ProductController extends BaseController
{
    private $_product;
    private $_category;

    function __construct()
    {

        // Giá trị mặc định cho data
        $data = array();

        // Ghi đề phương thức kết nối CSDL
        parent::__construct();

    }

    /**
     * list là phương thức lấy toàn bộ sản phẩm
     * @param mixed
     * @return void
     */
    public function list()
    {
        // Lấy toàn bộ loại sản phẩm
        $data['product'] = $this->_product->getAll();
        $data['category'] = $this->_category->getAll();
        // Render data và view 
        $this->load->render('layouts/admin/header');
        $this->load->render('components/admin/product/table-product', $data);
        $this->load->render('layouts/admin/footer');
    }



}
