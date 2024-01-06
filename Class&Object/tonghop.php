<?php
class User
{
    public const MGS = "Ví dụ nè:";

    public $name = "";  // property $name có khởi tạo với giá trị mặc định "Võ Duy Phương"
    private $age;
    private $info;

    public function setInfo($name, $age)
    {
        // Trong lớp, dùng $this để truy cập phương thức, thuộc tính của lớp
        $this->age = $age;
        $this->name = $name;

        // Truy cập được processInfomation từ bên trong class
        $this->processInfomation();
    }

    // Phương thức này - thiết lập giá trị info
    protected function processInfomation()
    {
        $this->info = $this::MGS . $this->name . ' đang là ' . $this->age . ' tuổi';
    }

    public function getInfo()
    {
        // Truy cập được info từ bên trong lớp
        return $this->info;
    }
}

//sử dụng
$user = new User();                         // Khởi tạo đới tượng mới
$user->setInfo('Võ Duy Phương', 20);           // Gọi phương thức 
echo "<br/>";
echo "Tên trong user: " . $user->name;                           // Truy cập thuộc tính name
echo "<br/>";
echo $user::MGS;                            // Truy cập hằng số MGS
echo "<br/>";
echo $user->getInfo();                      // Information:XUANTHULAB is 20 years old

// Một vài trường hợp sử dụng phát sinh lỗi

// lưu ý về phạm vi 
// public : có thể truy cập bất cứ đâu
// protected : có thể truy vấn tại nội bộ class, và các class kế thừa nó
/*
Lỗi dừng script: Call to protected method User::processInfomation() from scope
Lỗi này do processInfomation khai báo là protected nên không thể truy cập từ ngoài lớp,
chỉ truy cập bên trong nội bộ lớp (phương thức setInfo gọi processInfomation thì được).
*/
// private : bên ngoài không truy cập được, nhưng nội bộ lớp thì được.
/*
 Script bị dừng và có thông báo:
 Cannot access private property User::$age
 Tương tự như trên, $age khai báo là private nên bên ngoài không truy cập được, nhưng nội bộ lớp
 (như hàm setInfo có truy cập) thì được.
*/
echo "<br/>";
echo "Ví dụ cho lớp ẩn danh: ";
// Lớp ẩn danh 
$animal = new class {
    function show($message)
    {
        echo $message;
    }
};
echo "<br/>";
$animal->show('Đây là lớp động vật nè !');

// Contructor : cho phép người dùng khởi tạo các thuộc tính của một đối tượng khi tạo đối tượng.
class Audi
{
    public $infor;
    public $money;

    function __construct($infor, $money)
    {
        $this->infor = $infor;
        $this->money = $money;
    }

    function get_infor()
    {
        return $this->infor;
    }

    function get_money()
    {
        return $this->money;
    }
}

$audi = new Audi('TT', '100000 USD');
echo "<br/>";
var_dump($audi);

//Destracter : PHP tự động gọi hàm này ở cuối tập lệnh
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "The fruit is {$this->name}.";
    }
}

$apple = new Fruit("Apple", "Red");
echo "<br/>";
var_dump($apple);
