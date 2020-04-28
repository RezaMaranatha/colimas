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
    

<link rel="stylesheet" href="/css/profil.css">


<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="<?= $this->url->get($user->profile_pict) ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            <?= $user->nama ?>
                        </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-4">
                                    <p><?= $user->nama ?></p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-4">
                                    <p><?= $user->email ?></p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-4">
                                    <?php if ($user->jenis_kel == 'L') { ?>
                                    <p>Laki-Laki</p>
                                    <?php } else { ?>
                                    <p>Perempuan</p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Member</label>
                                </div>
                                <div class="col-md-4">
                                    <?php if ($user->membership_type == 1) { ?>
                                    <p>Bronze</p>
                                    <?php } elseif ($user->membership_type == 2) { ?>
                                    <p>Silver</p>
                                    <?php } elseif ($user->membership_type == 3) { ?>
                                    <p>Gold</p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="<?= $this->url->get('/users/edit') ?>" class="profile-edit-btn">Edit Profile</a>
                    <!-- <input class="profile-edit-btn" name="btnAddMore" value="Edit Profile"
                        onclick="<?= $this->url->get('/users/edit') ?>" /> -->
                    <a href="<?= $this->url->get('/upgrade') ?>" class="profile-edit-btn">Upgrade Member</a>
                </div>
            </div>
            <!-- <div class="container">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                    </div>
                </div>
            </div> -->
        </form>
    </div>
    
</body>

</html>