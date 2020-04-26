<?php
declare(strict_types=1);

namespace App\Controllers;

class PeminjamanController extends ControllerBase
{

    public function indexAction($id)
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/');
        }
        $sup = SupirTruk::findFirstById_supir($id);
    
            $sup->assign(
                $this->request->getPost(),
                [
                    'id_pemilik',
                    'nama_supir',
                    'nopol'
                ]
            );
            $sup->updated_at = date('Y-m-d h:i:sa');
            
    
            $success = $sup->save();
        $sup = new SupirTruk();
    
            $sup->assign(
                $this->request->getPost(),
                [
                    'id_pemilik',
                    'nama_supir',
                    'nopol'
                ]
            );
            $sup->updated_at = date('Y-m-d h:i:sa');
            $sup->created_at = date('Y-m-d h:i:sa');
    
            $success = $sup->save();
            if($success)
            {
                $this->flashSession->error('Input data berhasil');
            }
    
            $this->response->redirect('/supirtruk');
        $this->response->redirect('/buku');
    }

}
