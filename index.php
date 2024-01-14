<?php

require_once "vendor/autoload.php";

use Php2\Oop\Core\Filed;
use Php2\Oop\Core\Form;
use Php2\Oop\Model\BaseModel;

$baseModel = new BaseModel();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Lab3_VoDuyPhuong</title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
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
        <button type="submit" class="btn btn-primary">
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
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>