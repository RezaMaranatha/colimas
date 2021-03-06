<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Peminjaman extends Model
{
    public $id_peminjaman;
    public $id_user;
    public $id_buku;
    public $tanggal_peminjaman;
    public $tanggal_pengembalian;
    public $expected_pengembalian;
    public $status_peminjaman;
    public $updated_at;
    public $created_at;

    /**
     *  Dipanggil sekali untuk digunakan seluruh instance
     */
    public function initialize(){
        // Untuk mengeset database service yang digunakan untuk read data, default: 'db'
        // database service harus diregister di container dependecy injector
        $this->setReadConnectionService('db');

        // Untuk mengeset database service yang digunakan untuk write data, default : 'db'
        $this->setWriteConnectionService('db');

        // Untuk mengeset schema, default : empty string
        $this->setSchema('dbo');

        // Untuk mengeset nama tabel, default : nama class
        $this->setSource('peminjaman');

        $this->belongsTo(
            'id_user',
            Users::class,
            'id_user',
            [
                'reusable' => true,
                'alias'    => 'user'
            ]
        );

        $this->belongsTo(
            'id_buku',
            Buku::class,
            'id_buku',
            [
                'reusable' => true,
                'alias'    => 'buku'
            ]
        );
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }

}