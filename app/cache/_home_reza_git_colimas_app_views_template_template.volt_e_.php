a:5:{i:0;s:1979:"<!DOCTYPE html>
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

";s:5:"title";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:"
";s:4:"file";s:55:"/home/reza/git/colimas/app/views/template/template.volt";s:4:"line";i:46;}}i:1;s:13:"

<body>
    ";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:5:"
    ";s:4:"file";s:55:"/home/reza/git/colimas/app/views/template/template.volt";s:4:"line";i:50;}}i:2;s:17:"
</body>

</html>";}