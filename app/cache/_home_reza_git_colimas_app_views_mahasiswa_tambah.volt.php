<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                <strong>Register Mahasiswa</strong>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <?= $this->flashSession->output() ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" autocomplete="off" class="form-control"
                            placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" autocomplete="off" class="form-control"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" id="laki" name="jkel" value="L" style="display: inline;">
                        <label for="laki" style="padding-right: 10pt;">Pria</label>
                        <input type="radio" id="perempuan" name="jkel" value="P" style="display: inline;">
                        <label for="perempuan">Wanita</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>