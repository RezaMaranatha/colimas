<?php
declare(strict_types=1);

namespace App\Controllers;

class PeminjamanController extends ControllerBase
{

    public function indexAction()
    {
        $this->response->redirect('/buku');
    }

}
