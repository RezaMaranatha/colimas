<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Tipe;
use App\Models\Peminjaman;
// use Phalcon\Mvc\Model\Query;

class PeminjamanController extends ControllerBase
{
    public function initialize()
    {
        // // $this->view->peminjaman = Peminjaman::find();
        // $this->view->peminjaman = Peminjaman::find('id_user = ');
        // $temp = $this->session->get(('auth')['id_user']); 
        $temp =  $this->session->get('auth')['id_user'];
        $this->view->peminjaman = Peminjaman::findById_user($temp);
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

    public function tambahAction($id)
    {
        if(!$this->session->has('auth')){
            $this->response->redirect('/');
        }
        
        $buk = Buku::findFirstById_buku($id);
        
        $buk->id_buku=$buk->id_buku;
        $buk->id_penulis=$buk->id_penulis;
        $buk->id_tipe=$buk->id_tipe;
        $buk->judul=$buk->judul;
        $buk->halaman=$buk->halaman;
        $buk->status_buku=0;
        $buk->save();
        
        $pem = new Peminjaman();
        $pem->id_user=$this->session->get('auth')['id_user'];
        $pem->id_buku=$id;
        $pem->status_peminjaman=0;
        $pem->tanggal_peminjaman = date('Y-m-d h:i:sa');
        $date = date('Y-m-d h:i:sa');
        $pem->tanggal_pengembalian = strftime("%Y-%m-%d %H:%M:%S", strtotime("$date +7 day"));
        // $pem->tanggal_pengembalian = NULL;
        $pem->updated_at = date('Y-m-d h:i:sa');
        $pem->created_at = date('Y-m-d h:i:sa');
        // Store and check for errors
        $success = $pem->save();


        if($success)
        {
            $this->flashSession->error('Input data berhasil');
        }
        // passing a message to the view
        $this->response->redirect('/peminjaman');
    }

}
