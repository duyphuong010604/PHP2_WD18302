<div class="container">
    <h1 class="text-center">Đăng ký</h1>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <form method="POST" action="?url=ResgisterController/handleRegister" class="d-flex justify-content-center flex-column">
            <div class="mb-3">
                    <label for="lregisterInputname1" class="form-label">Họ và tên</label>
                    <input name="name" type="name" class="form-control" id="lregisterInputname1" aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">We'll never share your name with anyone else.</div>
                </div>    
            <div class="mb-3">
                    <label for="lregisterInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="lregisterInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="lregisterInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="lregisterInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="lregisterCheck1">
                    <label class="form-check-label" for="lregisterCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>