<?php
class Product
{
    // Khai báo các thuộc tính property của lớp
    // (dữ liệu data, trường dữ liệu field)
    public $name = 'Sản phẩm của tôi';
    // thuộc tính này chỉ truy cập được bên trong lớp (thông qua $this)
    private $price = 00;

    // Khai báo các phương thức (hàm) trong lớp
    public function showTitle()
    {
        echo 'Name:' + $this->name;
    }

    // Trả về dữ liệu $price của sản phẩm
    public function getPrice()
    {
        return $this->price;
    }

    // function __construct($name, $price)
    // {
    //     $this->name = $name;
    //     $this->price = $price;
    // }

    public function get_price($name, $price)
    {
        echo "Sản phẩm: " . $name . ", " . "Có giá: " . $price;
    }
}

// Tạo đối tượng mới từ lớp Product và lưu vào biến $product
$product = new Product();

var_dump($product);
$gia = $product->getPrice();
var_dump($gia);

