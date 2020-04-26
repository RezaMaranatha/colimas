<?php
declare(strict_types=1);

namespace App\Controllers;
// namespace App\Models;
use Phalcon\Mvc\Model\Manager;
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
        if(!$this->session->has('auth')){
            $this->response->redirect('/');
        }
    }

    // public function searchAction(){
    //     $searchKey =  $this->request->getPost('searchKey');
    //     $searchBy =  $this->request->getPost('searchBy');
    //         if($searchBy == 'penulis'){ 
    //             $buku = new Buku();
    //             $searchKey = '%'.$searchKey.'%';
    //             $query = $this->modelsManager->createQuery('SELECT * FROM buku,penulis
    //             WHERE nama LIKE :searchKey:');
    //             $results  = $query->execute([
    //                 'searchKey' => $searchKey,
    //             ]);
    //         }else if($searchBy == 'judul'){ 
    //             $searchKey = '%'.$searchKey.'%';
    //             $query = $this->modelsManager->createQuery('SELECT * FROM Buku
    //             WHERE judul = :searchKey:');
    //             $results  = $query->execute([
    //                 'searchKey' => $searchKey,
    //             ]);
    //         }
    //     $this->view->results = $results;
    // }
}

