<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <form method="POST" action="?url=LoginController/handleLogin"
                class="d-flex justify-content-center flex-column">
                <div class="mb-3">
                    <label for="loginInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="loginInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="loginInputPassword1" class="form-label">Password</label>
                    <input name="password" type="text" class="form-control" id="loginInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="loginCheck1">
                    <label class="form-check-label" for="loginCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?php
                echo $password
                    ?>
            </form>
        </div>
    </div>
</div>