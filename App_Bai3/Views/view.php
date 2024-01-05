<!doctype html>
<html lang="en">

<head>
    <title>Lab1.3 Võ Duy Phương</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container m-auto">
        <h1 class='fw-bold'>
            Thông tin nhân viên qua email
            <?php if (!empty($nhanvien['email']) ? $nhanvien['email'] : "")
                echo $nhanvien['email'];
            ?>
        </h1>
        <div class="container bg-success p-2">
            <h3>
                Họ:
                <?php if (!empty($nhanvien['ho']) ? $nhanvien['ho'] : "")
                    echo $nhanvien['ho'];
                ?>
            </h3>
            <h3>
                Tên:
                <?php if (!empty($nhanvien['ten']) ? $nhanvien['ten'] : "")
                    echo $nhanvien['ten'];
                ?>
            </h3>
        </div>
        <form action="" method="post">
            <label for="email">Email cần tìm:</label>
            <input class="form-control mb-2" type="email" name="email">
            <button class="btn btn-success " type="submit">Gửi</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>