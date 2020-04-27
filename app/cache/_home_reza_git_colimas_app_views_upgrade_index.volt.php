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
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <!-- <p>Welcome <?= $this->session->get('auth')['nama'] ?> </p> -->
                <li class="nav-item">
                    <span class="nav-link">Welcome, <?= $this->session->get('auth')['nama'] ?></span>
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
        </div>
    </nav>
</head>


<title>Daftar Buku</title>


<body>
    
<div class="container-fluid">
    <div class="card-deck" style="padding-top: 50px;">
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Bronze</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Silver</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Gold</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
    </div>
</div>

</body>

</html>