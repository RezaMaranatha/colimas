<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/logreg.css">
    <style>
        body {
            background-image: url('/images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .diva {
            width: 35%;
            min-height: 50vh;
            padding-top: 20px;
            border-radius: 2%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="login d-flex align-items-center py-5">
            <div class="container diva" style="background-color:white">
                <div class="col-lg-11 cols-lg-11 mx-auto">
                    <h3 class="login-heading mb-4" style="text-align: center;">Register</h3>
                    <form method="post" action="<?= $this->url->get('/auth/register') ?>">
                        <div class="form-label-group">
                            <input type="email" name="email" placeholder="Email address" required autofocus
                                class="form-control">
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="nama" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="pass" autocomplete="off" class="form-control"
                                placeholder="Password" required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="pass2" autocomplete="off" class="form-control"
                                placeholder="Confirm Password" required>
                        </div>
                        <div class="form-label-group">
                            <span>Jenis Kelamin</span><br>
                            <input type="radio" id="laki" name="jkel" value="L" style="display: inline;" required>
                            <label for="laki" style="padding-right: 10pt;">Laki-Laki</label>
                            <input type="radio" id="perempuan" name="jkel" value="P" style="display: inline;" required>
                            <label for="perempuan">Perempuan</label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block btn-login text-uppercase font-weight-bold mb-2"
                            type="submit" value="Login">Register</button>
                        <div class="text-center" style="padding-bottom: 20px;">
                            <span class="small">Already have an account?</span>
                            <a class="small" href="<?= $this->url->get('auth/login') ?>">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="<?= $this->url->get('/auth/register') ?>" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Register
                    </span>
                    <div class="wrap-input100 validate-input p-b-10">
                        <label>Email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email"
                            required>
                    </div>
                    <div class="form-label-group">
                        <label>Username</label>
                        <input type="text" name="nama" autocomplete="off" class="form-control" placeholder="Username"
                            required>
                    </div>
                    <div class="wrap-input100 validate-input p-b-10">
                        <label for="inputPassword">Password</label>
                        <div>
                            <div class="p-b-3">
                                <input type="password" name="pass" autocomplete="off" class="form-control"
                                    placeholder="Password" required>
                            </div>
                            <div>
                                <input type="password" name="pass2" autocomplete="off" class="form-control"
                                    placeholder="Confirm Password" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" id="laki" name="jkel" value="L" style="display: inline;" required>
                        <label for="laki" style="padding-right: 10pt;">Laki-Laki</label>
                        <input type="radio" id="perempuan" name="jkel" value="P" style="display: inline;" required>
                        <label for="perempuan">Perempuan</label>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Register">
                    </div>

                </form>
            </div>
        </div> -->
        <!-- <div class="container-fluid">
                <div class="bg-image"> -->
        <!-- <div class="col-md-8 col-lg-6 transparent">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Register</h3>
                                <form method="post" action="<?= $this->url->get('/auth/login') ?>">
                                    <div class="form-label-group">
                                        <input type="email" name="email" placeholder="Email address" required autofocus
                                            class="form-control">
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Password"
                                            required>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <button
                                        class="btn btn-lg btn-success btn-block btn-login text-uppercase font-weight-bold mb-2"
                                        type="submit" value="Login">Sign in</button>
                                    <div class="text-center">
                                        <span class="small">Don't have an account?</span>
                                        <a class="small" href="<?= $this->url->get('auth/register') ?>">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
</body>

</html>