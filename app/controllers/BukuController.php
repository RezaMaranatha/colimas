<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Tipe;
// use App\Validation\PabrikValidation;
date_default_timezone_set("Asia/Bangkok");

class BukuController extends ControllerBase
{
    public function initialize()
    {
        $this->view->buku = Buku::find();
        $this->view->penulis = Penulis::find();
        $this->view->penulis = Tipe::find();
    }

    public function indexAction()
    {

    }

}

