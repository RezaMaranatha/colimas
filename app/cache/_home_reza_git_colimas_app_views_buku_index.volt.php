<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                <strong>List Buku</strong>
            </div>
            <div class="card-header">
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
                        <tr id="myTR">
                            <td><?= $b->judul ?></td>
                            <td><?= $b->penulis->nama ?></td>
                            <td><?= (($b->status_buku == 1 ? 'Available' : 'Not Available')) ?></td>
                            <td>
                                <?php if ($b->status_buku == 1) { ?>
                                <a href="<?= $this->url->get('/peminjaman') ?>" class="btn btn-success btn-sm" disabled>Pinjam</a>
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