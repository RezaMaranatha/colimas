<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?= $this->assets->outputCss() ?> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?= $this->url->get('/') ?>">Colimas</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->url->get('/buku') ?>">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('/peminjaman') ?>">Peminjaman</a>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link" href="<?= $this->url->get('/users/profil') ?>">Profil</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <!-- <p>Welcome <?= $this->session->get('auth')['nama'] ?> </p> -->
                <li class="nav-item">
                    <span class="nav-link">Welcome, <?= $this->session->get('auth')['nama'] ?></span>
                </li>

                <li class="nav-item">
                    <a href="<?= $this->url->get('/auth/logout') ?>" class="nav-link">
                        <i class='fas fa-sign-out-alt'></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</head>


<title>Daftar Buku</title>


<body>
    
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>EDIT DATA</strong>
        </div>
        <div class="card-header">
            <a href="<?= $this->url->get('/users/profil') ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">

            <form autocomplete="off" method="post" action="<?= $this->url->get('users/update/') ?>">
                <?= $this->flashSession->output() ?>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" autocomplete="off" name="nama" class="form-control" placeholder="Username"
                        value="<?= $user->nama ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" id="laki" name="jkel" value="L" style="display: inline;" required>
                    <label for="laki" style="padding-right: 10pt;">Laki-Laki</label>
                    <input type="radio" id="perempuan" name="jkel" value="P" style="display: inline;" required>
                    <label for="perempuan">Perempuan</label>
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