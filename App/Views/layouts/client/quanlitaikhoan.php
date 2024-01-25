<main id="main">

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>Quản lý tài khoản</h2>
                <p></p>
            </div>

            <div class="row no-gutters mb-4">
                <div class="col-4">
                    <div class="d-flex justify-content-center mb-4">
                        <img id="selectedAvatar" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                            class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;"
                            alt="example placeholder" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded me-1">
                            <label class="form-label text-white m-1" for="customFile2">Cập nhật ảnh mới</label>
                            <input type="file" class="form-control d-none" id="customFile2"
                                onchange="displaySelectedImage(event, 'selectedAvatar')" />
                        </div>
                        <button type="submit" class="btn btn-success btn-rounded">Lưu ảnh mới</button>
                    </div>
                </div>
                <div class="col-8">
                    <form method="" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="last_name">Họ</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name"
                                        placeholder="Họ" value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="first_name">Tên</label>
                                    <input type="text" class="form-control" name="frist_name" id="frist_name"
                                        placeholder="Tên" value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="username">Tên đăng nhập tài khoản</label>
                                    <input type="text" class="form-control" name="username" id="username" readonly
                                        value="Tên đăng nhập nè">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="addrees">Địa chỉ</label>
                                    <input type="text" class="form-control" name="addrees" id="addrees"
                                        placeholder="Địa chỉ" value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" readonly value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="date">Ngày sinh</label>
                                    <input type="date" class="form-control" name="date" id="date" placeholder=""
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="label" for="phone">Số điện thoại</label>
                                    <input type="number" class="form-control" name="phone" id="phone" readonly value="">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check">
                                    <div>
                                        <label class="label" for="date">Giới tính</label>
                                    </div>
                                    <input class="form-check-input" type="radio" name="gender">
                                    <label class="form-check-label" for="gender">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" checked>
                                    <label class="form-check-label" for="gender1">
                                        Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-group">
                                    <input type="submit" value="Lưu thông tin" class="btn btn-success">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container ">
                <div class="section-title">
                    <h4>Thay đổi mật khẩu</h4>
                    <p></p>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Xác nhân mật khẩu mới</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Thay đổi mật khẩu</button>
                </form>
            </div>
        </div>
    </section><!-- End Facts Section -->

</main><!-- End #main -->