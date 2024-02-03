<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../../contents/client/assets/img/favicon.png" rel="icon">
    <link href="../../../contents/client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../contents/client/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../contents/client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../contents/client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../contents/client/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../contents/client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../contents/client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../contents/client/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        /* Thong bao Popup  */
        .tbpopup .tboverlay {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;
        }

        .tbpopup .tbcontent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            background: #fff;
            max-width: 500px;
            z-index: 2;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
            border-radius: 20px;
            display: block;
            position: fixed;
            box-shadow: 0px 0px 10px #111;
        }

        @media (max-width: 700px) {
            .tbpopup .tbcontent {
                width: 90%;
            }
        }

        .tbpopup .tbclose-btn {
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
            width: 35px;
            height: 35px;
            color: #ff4444;
            font-size: 30px;
            font-weight: 600;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
        }

        .tbpopup.active .tboverlay {
            display: block;
        }

        .tbpopup.active .tbcontent {
            transition: all 300ms ease-in-out;
            transform: translate(-50%, -50%) scale(1);
        }

        .tbbuttom {
            background: #00cc00;
            color: #fff
        }
    </style>
</head>

<body onload="
<?php
if (
    isset($noErrors)
) {
    echo "thongbaopopup()";
} else {
    echo " ";
}
?>">
    <section class="vh-100" style="background-color: #ddd2d4;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center h-75">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../../../contents/client/assets/img/login/15.jpg" alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                                    style="background-size: cover; background-position: center;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="post" action="?url=QuenmatkhauController/handleQmk">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="../../../contents/admin/assets/img/Green White Simple Minimalist Retro Cafe Logo1.png"
                                                alt="" class="me-4">
                                            <span class="h1 fw-bold mb-0">Adonas</span>
                                        </div>
                                        <h5 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Quên mật khẩu</h5>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Tên đăng nhập</label>
                                            <input type="text" id="username" name="username"
                                                class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email của tài khoản</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-lg" />
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" name="gui"
                                                type="submit">Gửi</button>
                                            <p>
                                                <?php
                                                if (isset($empty))
                                                    echo "<span class='text-star' style='color: red;'>" . $empty . "</span>";
                                                if (isset($email))
                                                    echo "<span class='text-star' style='color: red;'>" . $email . "</span>";
                                                if (isset($noExit))
                                                    echo "<span class='text-star' style='color: red;'>" . $noExit . "</span>";
                                                ?>
                                            </p>

                                            <!-- Thong bao pupup -->
                                            <div class="tbpopup" id="tbpopup-1">
                                                <div class="tboverlay"></div>
                                                <div class="tbcontent">
                                                    <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
                                                    <div style="font-size:30px;font-weight:bold">Thông báo</div>
                                                    <p>Chúng tôi đã gửi cho bạn mật khẩu mới qua email của tài
                                                        khoản, Vui lòng kiểm tra Email.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <a class="small text-muted" href="?url=QuenmatkhauController/loadViewLogin">Đăng
                                            nhập</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
    <script src="../../../contents/client/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../../contents/client/assets/vendor/aos/aos.js"></script>
    <script src="../../../contents/client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../contents/client/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../../contents/client/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../../contents/client/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../../contents/client/assets/vendor/typed.js/typed.umd.js"></script>
    <script src="../../../contents/client/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../../../contents/client/assets/vendor/php-email-form/validate.js"></script>


    <!-- Template Main JS File -->
    <script src="../../../contents/client/assets/js/main.js"></script>
    <script>
        function thongbaopopup() {
            document.getElementById("tbpopup-1").classList.toggle("active");
        }
    </script>
    <script src="../../../contents/client/assets/js/time.js"></script>



</body>

</html>