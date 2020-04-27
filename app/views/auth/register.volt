<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    {{ assets.outputCss() }}
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="post" action="{{url('/auth/register')}}" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Register
                    </span>
                    <div class="wrap-input100 validate-input p-b-10">
                        <label>Email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email"
                            required>
                    </div>
                    <div class="wrap-input100 validate-input p-b-10">
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
        </div>
</body>

</html>