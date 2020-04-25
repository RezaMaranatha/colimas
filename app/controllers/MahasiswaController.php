<?php
declare(strict_types=1);

namespace App\Controllers;
// namespace App\Models;

use App\Models\Mahasiswa;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");
class MahasiswaController extends ControllerBase
{
    public function initialize()
    {
        $this->view->mahasiswa = Mahasiswa::find();
    }

    public function indexAction()
    {
        // echo "this is the landing page";
    }
    public function addAction()
    {
        
    }
    public function registerAction()
    {
        // $validation = new UserValidation();
        // $messages = $validation->validate($_POST);
        // if(count($messages))
        // {
        //     foreach ($messages as $message)
        //     {
        //         $this->flashSession->error($message->getMessage());
        //     }
        //     $this->response->redirect('/user/tambah');
        // }
        // else
        // {
        $email = $this->request->getPost('email', 'string');
        $nama = $this->request->getPost('nama', 'string');
        $pass = $this->request->getPost('pass','string');
        $pass2 = $this->request->getPost('pass2','string');
        $jenis_kel = $this->request->getPost('jkel','string');
        $membership_type = 1;

        if($pass === $pass2 && $pass != ''){
            $checkUser = Mahasiswa::findFirst("email = '$email'");
            if($checkUser){
                $this->flashSession->error('Email sudah dipakai');
                // $this->response->redirect('/mahasiswa/register');
                // $this->view->disable();
            }
            else
            {
                $mahasiswa = new Mahasiswa();
                $mahasiswa->email=$email;
                $mahasiswa->nama=$nama;
                $mahasiswa->pass=$this->security->hash($pass);
                $mahasiswa->jenis_kel=$jenis_kel;
                $mahasiswa->membership_type=$membership_type;
                $mahasiswa->updated_at = date('Y-m-d h:i:sa');
                $mahasiswa->created_at = date('Y-m-d h:i:sa');
                // Store and check for errors
                $success = $mahasiswa->save();
        
        
                if($success)
                {
                    $this->flashSession->error('Input data berhasil');
                }
                // passing a message to the view
                $this->response->redirect('/mahasiswa');
            }
        }
        // }
    }
}