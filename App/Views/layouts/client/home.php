<section id="home" class="d-flex flex-column justify-content-center align-items-center">
  <div class="home-container" data-aos="fade-in">
    <h1>Cà Phê Adonas</h1>
    <p>Phục vụ khách hàng <span class="typed" data-typed-items="hết mình, tận tâm, trân trọng, vui vẻ"></span>
    </p>
  </div>
</section><!-- End home -->

<main id="main">
  <section id="calam" class="intro">
    <div class="bg-image h-100" style="background-color: #f5f7fa;">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="section-title">
            <h2>Danh sách ca làm việc</h2>
            <p></p>
          </div>
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card shadow-2-strong">
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                    style="position: relative; height: 700px">
                    <table class="table mb-3 table-striped table-dark">
                      <thead style="background-color: #04b14095;">
                        <tr class="text-uppercase text-success">
                          <th scope="col" class="text-uppercase text-success">Ca làm</th>
                          <th scope="col" class="text-uppercase text-success">Nhân viên ca làm</th>
                          <th scope="col" class="text-uppercase text-success">Thời gian ca làm</th>
                          <th scope="col" class="text-uppercase text-success">Ngày ca làm</th>
                          <th scope="col" class="text-uppercase text-success">Số lượng</th>
                          <th scope="col" class="text-uppercase text-success">Ghi chú cho ca làm</th>
                          <th scope="col" class="text-uppercase text-success">Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            01
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                              <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                              </div>
                            </div>
                          </td>
                          <td>9:00 AM - 11:00 AM</td>
                          <td>Thứ xxx 18/01/2023</td>
                          <td>10</td>
                          <td>Boxing</td>
                          <td>
                            <span class="badge bg-success rounded-pill d-inline">Active</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            01
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                              <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                              </div>
                            </div>
                          </td>
                          <td>9:00 AM - 11:00 AM</td>
                          <td>Thứ xxx 18/01/2023</td>
                          <td>10</td>
                          <td>Boxing</td>
                          <td>
                            <span class="badge bg-success rounded-pill d-inline">Active</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            01
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                              <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                              </div>
                            </div>
                          </td>
                          <td>9:00 AM - 11:00 AM</td>
                          <td>Thứ xxx 18/01/2023</td>
                          <td>10</td>
                          <td>Boxing</td>
                          <td>
                            <span class="badge bg-success rounded-pill d-inline">Active</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            01
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" />
                              <div class="ms-3">
                                <p class="fw-bold mb-1">John Doe</p>
                              </div>
                            </div>
                          </td>
                          <td>9:00 AM - 11:00 AM</td>
                          <td>Thứ xxx 18/01/2023</td>
                          <td>10</td>
                          <td>Boxing</td>
                          <td>
                            <span class="badge bg-success rounded-pill d-inline">Active</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End About Section -->
  <section id="chamcong" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Chấm công</h2>
        <p>
          Vui lòng kiểm tra thông tin chấm công hợp lý,
          <br>
          Thời gian sẽ được settime từ lúc nhấn chấm công và outtime lúc xác nhận kết thúc ca làm việc
        </p>
      </div>

      <div class="row">
        <div class="col-lg-8 offset-2" data-aos="fade-up">
          <h3 class="resume-title">Thời gian chấm công</h3>
          <div class="pb-0">
            <div class="container mx-auto">
              <div id="timer">
              </div>
            </div>
            <button onclick="getStartTime()" class="btn btn-outline-primary">Bắt Đầu</button>
            <button onclick="getEndTime()" class="btn btn-outline-danger">Kết Thúc</button>
          </div>
          <h3 class="resume-title">Chấm công</h3>
          <div class="col-md-6 reject-checkbox">
            <div class="mb-2 text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Resume Section -->
  <!-- ======= About Section ======= -->
  <section id="info" class="about">
    <div class="container">

      <div class="section-title d-flex justify-content-between align-items-center">
        <h2>Thông tin cá nhân</h2>
        <h4>
          <button class="btn btn-outline-primary rounded-pill ">
            <a href="?url=Quanlitaikhoan">Thay đổi thông tin</a>
          </button>
        </h4>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="../../../public/client/assets/img/profile-img.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Nhân viên - Phục vụ.</h3>
          <h5 class="fst-italic">
            <i class="bi bi-person-badge me-2"></i><strong>Họ và tên:</strong>
            <span>Võ Duy Phương</span>
          </h5>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Ngày sinh:</strong> <span>1 May 1995</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Vai trò:</strong> <span>Nhân viên phục vụ</span>
                </li>
                <li><i class="bi bi-chevron-right"></i> <strong>Số điện thoại:</strong> <span>0388925209</span>
                </li>
                <li><i class="bi bi-chevron-right"></i> <strong>Địa chỉ</strong> <span>New York, USA</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Tuổi:</strong> <span>30</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Giới tính:</strong> <span>Nam</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Emai:</strong> <span>email@example.com</span>
                </li>

              </ul>
            </div>
          </div>
          <p>
            Không phải lúc nào thành công cũng được định nghĩa bằng sự vĩ đại mà thành công còn được nhìn nhận bằng sự
            cố chấp, không từ bỏ và quyết tâm vượt qua tất cả những khó khăn chắn ngang đường. Sau tất cả, sự vĩ đại
            sẽ đến.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->





  <section id="congviec" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Công việc</h2>
        <p>Thống kê công việc <strong>datetime bđ - kt</strong></p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi bi-briefcase"></i></div>
          <h4 class="title"><a href="">Thời gian đã làm trong tuần qua</a></h4>
          <p class="description">Tổng số giờ: </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bi bi-card-checklist"></i></div>
          <h4 class="title"><a href="">Số ca làm trong tuần</a></h4>
          <p class="description">Tổng số ca làm trong tuần: </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bi bi-person-fill-check"></i></div>
          <h4 class="title"><a href="">Số lần chấm công trong tuần: </a></h4>
          <p class="description">Tổng số lượt chấm công: </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bi bi-cash"></i></div>
          <h4 class="title"><a href="">Lương cơ bản</a></h4>
          <p class="description">18.000 VNĐ</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="bi bi-cash-stack"></i></div>
          <h4 class="title"><a href="">Tiền lương</a></h4>
          <p class="description">Tổng tiền lương</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
          <div class="icon"><i class="bi bi-calendar4-week"></i></div>
          <h4 class="title"><a href="">Vai trò</a></h4>
          <p class="description">Nhân viên phục vụ</p>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

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
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Họ" value="">
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label class="label" for="first_name">Tên</label>
                  <input type="text" class="form-control" name="frist_name" id="frist_name" placeholder="Tên" value="">
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
                  <input type="text" class="form-control" name="addrees" id="addrees" placeholder="Địa chỉ" value="">
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
                  <input type="date" class="form-control" name="date" id="date" placeholder="" value="">
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
          <h4>Thay đổi mậ khẩu</h4>
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