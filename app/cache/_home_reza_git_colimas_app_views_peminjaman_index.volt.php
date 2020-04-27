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


<title>Peminjaman</title>


<body>
    
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Peminjaman</strong>
        </div>
        <div class="card-header">
            <?= $this->flashSession->output() ?>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjaman as $p) { ?>
                    <tr>
                        <td><?= $p->buku->judul ?></td>
                        <?php if ($p->status_peminjaman == 1) { ?>
                        <td><?= $p->tanggal_peminjaman ?></td>
                        <td><?= $p->tanggal_pengembalian ?></td>
                        <td>Dipinjam</td>
                        <?php } else { ?>
                        <td>Menunggu</td>
                        <td>Menunggu</td>
                        <td>Menunggu Konfirmasi Pustakawan</td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

</html>