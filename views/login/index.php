<div class="login-box">
    <div class="login-logo">
        <a href="https://adminlte.io/themes/v3/index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>


            <form action="index.php?c=login&a=login" method="post"> action
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="utilizador">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="senha">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>

                </div>
            </form>
            <p class="mb-1">
                <a href="https://adminlte.io/themes/v3/pages/examples/forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="https://adminlte.io/themes/v3/pages/examples/register.html" class="text-center">Register a new membership</a>
            </p>
        </div>

    </div>
</div>