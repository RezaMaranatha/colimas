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
    
<div class="container">

    <!-- <form method="POST" action="<?= $this->url->get('/buku/search') ?>">
        <div>
            <input class="prompt" type="text" placeholder="Cari koleksi buku..." name="searchKey">
            <button class="btn btn-success btn-sm" type="submit" value="">Search</button>
        </div>
        <br> -->
    <!-- <select name="searchBy" class="ui dropdown">
            <option value="judul">Judul Buku</option>
            <option value="pengarang">Pengarang</option>
            <option value="kategori">Kategori</option>
        </select> -->
    <!-- </form> -->
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Buku</strong>
        </div>
        <div class="card-header">
            <form class="form-inline my-2 my-lg-0" method="POST" action="<?= $this->url->get('/buku/search') ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Buku" aria-label="Search"
                    name="searchKey">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <br>
            <!-- <a href="<?= $this->url->get('/supirtruk/tambah') ?>" class="btn btn-primary btn-sm float-left"><span
                        class="fas fa-plus" style="padding-right: 7px;"></span>Input</a> -->
            <?= $this->flashSession->output() ?>
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