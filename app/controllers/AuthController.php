<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");

class AuthController extends ControllerBase
{
    // public function initialize()
    // {
    // }

    public function indexAction()
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }
        else {
            $this->response->redirect('/users');
        }
    }
    public function loginAction()
    {
        if($this->request->isPost()){
            $email = $this->request->getPost('email', 'string');
            $pass = $this->request->getPost('pass', 'string');
            $user = Users::findFirst(
                [
                    'conditions' => 'email = :email:',
                    'bind'       => [
                        'email' => $email,
                    ],
                ]
            );
            if($user)
            {
                // Check user's password
                $check = $this
                    ->security
                    ->checkHash($pass, $user->pass);
                    if($check === true)
                    {
                        
                        // Set a session
                        $this->session->set(
                            'auth',
                            [
                                'id_user' => $user->id_user,
                                'email' => $user->email,
                                'nama' => $user->nama,
                                'pass' => $user->pass,
                                'jenis_kel' => $user->jenis_kel,
                                'membership' => $user->membership_type,
                            ]   
                        );
                        $this->response->redirect('/');
                    }
                    else{
                        $this->flashSession->error('Password Salah');
                        $this->response->redirect('/');
                    }
                }
                else
                {
                    $this->flashSession->error('Username Salah');
                    $this->response->redirect('/');
                }
        }
    }
    public function registerAction()
    {
        $users = new Users();

        $email = $this->request->getPost('email', 'string');
        $nama = $this->request->getPost('nama', 'string');
        $pass = $this->request->getPost('pass','string');
        $pass2 = $this->request->getPost('pass2','string');
        $jenis_kel = $this->request->getPost('jkel','string');
        $membership_type = 1;
        if($this->request->hasFiles())
        {
            $image = $this->request->getUploadedFiles()[0];
            $path = 'img/'.$image->getName();
            $users->profile_pict = $path;
            $image->moveTo($path);
        }
        else 
        {
            $users->profile_pict = 'img/basicpict.png';
        }

        if($pass === $pass2 && $pass != ''){
            $checkUser = Users::findFirst("email = '$email'");
            if($checkUser){
                $this->view->disable();
                $this->flashSession->error('Email sudah dipakai');
                $this->response->redirect('/auth/register');
            }
            else
            {

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
                $this->response->redirect('/auth/login');
            }
        }
        // }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }

}

