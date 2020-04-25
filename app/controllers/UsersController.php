<?php
declare(strict_types=1);

namespace App\Controllers;
// namespace App\Models;

use App\Models\Users;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");
class UsersController extends ControllerBase
{
    public function initialize()
    {
        $this->view->users = Users::find();
    }

    public function indexAction()
    {
        // echo "this is the landing page";
    }
    public function loginAction()
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
            $checkUser = Users::findFirst("email = '$email'");
            if($checkUser){
                $this->flashSession->error('Email sudah dipakai');
                // $this->response->redirect('/mahasiswa/register');
                // $this->view->disable();
            }
            else
            {
                $users = new Users();
                $users->email=$email;
                $users->nama=$nama;
                $users->pass=$this->security->hash($pass);
                $users->jenis_kel=$jenis_kel;
                $users->membership_type=$membership_type;
                $users->updated_at = date('Y-m-d h:i:sa');
                $users->created_at = date('Y-m-d h:i:sa');
                // Store and check for errors
                $success = $users->save();
        
        
                if($success)
                {
                    $this->flashSession->error('Input data berhasil');
                }
                // passing a message to the view
                $this->response->redirect('/users');
            }
        }
        // }
    }
}