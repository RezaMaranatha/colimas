<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <?= $this->assets->outputCss() ?> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <div class="mx-auto order-0"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?= $this->url->get('/') ?>" class="navbar-brand"><img src="/images/logo-small-navbar-resize.png" width="120"
                alt=""></a>
        <!-- </div> -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('/buku') ?>">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <?php if ($this->session->get('auth')) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->url->get('/peminjaman') ?>">Peminjaman</a>
                </li>
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
                    <a class="nav-link" href="<?= $this->url->get('/auth/login') ?>">Login</a>
                </li>
                <li class="nav-item navbar-right">
                    <a href="<?= $this->url->get('/auth/register') ?>" class="nav-link">
                        <span>Register</span>
                    </a>
                </li>
            </ul>
            <?php } ?>

        </div>
    </nav>
    <!-- <style>
        body {
            background-image: url('/images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style> -->
</head>


<title>Daftar Buku</title>


<body>
    

<div class="container-fluid">
    <div class="mx-auto" style="padding-top: 20px;">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Buku</strong>
        </div>
        <div class="card-header">
            <form class="form-inline" method="POST" action="<?= $this->url->get('/buku/search') ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Buku" aria-label="Search"
                    name="searchKey">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <br>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $b) { ?>
                    <tr>
                        <td><?= $b->judul ?></td>
                        <td><?= $b->penulis->nama ?></td>
                        <td><?= (($b->status_buku == 1 ? 'Available' : 'Not Available')) ?></td>
                        <td>
                            <?php if ($b->status_buku == 1) { ?>
                            <a href="<?= $this->url->get('peminjaman/tambah/' . $b->id_buku) ?>" class="btn btn-success btn-sm"
                                disabled>Pinjam</a>
                            <?php } else { ?>
                            <button class="btn btn-success btn-sm" disabled>Pinjam</button>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>