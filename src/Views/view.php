<?php

require_once "../../vendor/autoload.php";

use Php2\Oop\Core\Filed;
use Php2\Oop\Core\Form;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Model\Nhanvien;

$baseModel = new BaseModel();
$nhanvien = new Nhanvien();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lab1.4 Võ Duy Phương</title>
</head>

<body>

    <div class="container">
        <h1 class='text-center m-3 text-primary'>
            Bảng thông tin nhân viên
        </h1>
        <div class="row">
            <div class="col-12">
                <table class="table-success table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">Họ</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $danhsach = $nhanvien->get_all();
                        foreach ($danhsach as $row):
                            ?>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>
                                <td>
                                    <?= $row['ho'] ?>
                                </td>
                                <td>
                                    <?= $row['ten'] ?>
                                </td>
                                <td>
                                    <?= $row['email'] ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Thêm luôn nhân viên mới -->
    <?php

    if (isset($_POST['them'])) {
        $ten = $_POST['firstname'] ?? "";
        $ho = $_POST['lastname'] ?? "";
        $email = $_POST['email'] ?? "";
        $password = md5($_POST['password']);
        $result = $nhanvien->insert($ho, $ten, $email, $password);
    }
    ?>

    <div class="container">
        <h1>Tạo mới tài khoản.</h1>
        <?php
        $form = Form::begin(" ", "post");
        ?>
        <div class="row">
            <div class="col">
                <?php echo $form->filed('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->filed('lastname'); ?>
            </div>
        </div>
        <?php
        echo $form->filed("email");
        ?>
        <?php
        echo $form->filed("password")->passwordFiled();
        ?>
        <?php
        echo $form->filed("confirm")->passwordFiled();
        ?>
        <button type="submit" name="them" class="btn btn-primary">
            Gửi
        </button>
        <?php echo Form::end(); ?>
        <div class="row">
            <div class="col">
                <h1>Bài Tập Thêm</h1>
            </div>
            <div class="row">
                <h3>Gọi tất cả các phương thức</h3>
                <div class="col">
                    <?php
                    echo $baseModel->get_info();
                    ?>
                    <?php
                    echo "<br/>";
                    echo $baseModel->get_all();
                    ?>
                    <?php
                    echo "<br/>";
                    echo $baseModel->get_list(12);
                    ?>
                    <?php
                    echo "<br/>";
                    echo $baseModel->update(12);
                    ?>
                    <?php
                    echo "<br/>";
                    echo $baseModel->delete(12);
                    ?>
                    <?php
                    echo "<br/>";
                    echo $baseModel->insert("Phi Hao", 19);
                    ?>
                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>