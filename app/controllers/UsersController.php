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
        // $this->view->users = Users::find();
    }

    public function indexAction()
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }

        $this->response->redirect('/users/profil');
    }
    
    public function profilAction() 
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }
        $usr = Users::findFirstById_user($this->session->get('auth')['id_user']);
        $this->view->user = $usr; 
    }
    public function editAction() 
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }

        $usr = Users::findFirstById_user($this->session->get('auth')['id_user']);
        $this->view->user = $usr;   
    }
    
    public function updateAction() 
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/auth/login');
        }
        $usr = Users::findFirstById_user($this->session->get('auth')['id_user']);
    
            $nama = $this->request->getPost('nama','string');
            $jenis_kel = $this->request->getPost('jkel','string');

            $usr->email =  $usr->email;
            $usr->nama =  $nama;
            $usr->jenis_kel =  $jenis_kel;
            $usr->updated_at = date('Y-m-d h:i:sa');
            $usr->created_at =  $usr->created_at;
            $usr->pass =  $usr->pass;
            $usr->membership_type =  $usr->membership_type;

            $success = $usr->save();
            if($success)
            {
                $this->flashSession->error('Edit data berhasil');
            }
    
            $this->response->redirect('/users/profil');
    }
    public function upgradeAction(){
        
    }
}