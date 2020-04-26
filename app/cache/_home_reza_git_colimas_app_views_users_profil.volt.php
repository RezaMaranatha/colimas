<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>

<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                            alt="" />
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
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="<?= $this->url->get('/users/edit') ?>" class="profile-edit-btn">Edit Profile</a>
                    <!-- <input class="profile-edit-btn" name="btnAddMore" value="Edit Profile"
                        onclick="<?= $this->url->get('/users/edit') ?>" /> -->
                </div>
            </div>
            <div class="container">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row justify-content-md-center">
                            <div class="col-md-2">
                                <label>Username</label>
                            </div>
                            <div class="col-md-2">
                                <p><?= $user->nama ?></p>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-2">
                                <p><?= $user->email ?></p>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-2">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-2">
                                <?php if ($user->jenis_kel == 'L') { ?>
                                <p>Laki-Laki</p>
                                <?php } else { ?>
                                <p>Perempuan</p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-2">
                                <label>Member</label>
                            </div>
                            <div class="col-md-2">
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
        </form>
    </div>
</body>

</html>