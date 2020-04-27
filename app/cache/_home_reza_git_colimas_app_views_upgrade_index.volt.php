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
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('/buku') ?>">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <?php if ($this->session->get('auth')) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('/peminjaman') ?>">Peminjaman</a>
                </li>
                <?php } else { ?>
                <!-- <h1>hello</h1> -->
                <?php } ?>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <?php if ($this->session->get('auth')) { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link active">Welcome, <?= $this->session->get('auth')['nama'] ?></span>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link" href="<?= $this->url->get('/users/profil') ?>">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('/auth/logout') ?>" class="nav-link">
                        <i class='fas fa-sign-out-alt'></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <?php } else { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navbar-right">
                    <a class="nav-link active" href="<?= $this->url->get('/auth/login') ?>">Login</a>
                </li>
                <li class="nav-item navbar-right">
                    <a href="<?= $this->url->get('/auth/register') ?>" class="nav-link active">
                        <span>Register</span>
                    </a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</head>


<title>Daftar Buku</title>


<body>
    
<div class="container-fluid">
    <div class="card-deck" style="padding-top: 50px;">
        <div class="card">
            <img class="card-img-top" src="/images/bronze.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bronze</h5>
                <p class="card-text">Default membership lama peminjaman sepanjang 3 hari</p>
                <a href="<?= $this->url->get('/upgrade/update') ?>" class="btn btn-primary">Choose</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/silver.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Silver</h5>
                <p class="card-text">Perpanjangan lama peminjaman menjadi 5 hari</p>
                <a href="<?= $this->url->get('/upgrade/update') ?>" class="btn btn-primary">Choose</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/gold.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gold</h5>
                <p class="card-text">Perpanjangan lama peminjaman menjadi 7 hari</p>
                <a href="<?= $this->url->get('/upgrade/update') ?>" class="btn btn-primary">Choose</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>