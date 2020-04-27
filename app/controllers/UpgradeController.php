<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Upgrade;
use App\Models\Users;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");

class UpgradeController extends ControllerBase
{
    public function initialize()
    {
        // $this->view->users = Users::find();
    }

    public function indexAction()
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }
    }

    public function updateAction()
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }
        $upg = new Upgrade();
        $upg->id_user=$this->session->get('auth')['id_user'];
        // $pem->tanggal_pengembalian = NULL;
        $upg->tanggal_pengajuan = date('Y-m-d h:i:sa');
        $upg->tanggal_penyetujuan = date('Y-m-d h:i:sa');
        $upg->status_upgrade = 0;
        // Store and check for errors
        $success = $upg->save();


        if($success)
        {
            $this->flashSession->error('Input data berhasil');
        }
        // passing a message to the view
        $this->response->redirect('/users/profil');
    }
}

