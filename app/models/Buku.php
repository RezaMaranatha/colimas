<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Buku extends Model
{
    public $id_buku;
    public $id_penulis;
    public $id_tipe;
    public $judul;
    public $halaman;
    public $status_buku;

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
        $this->setSource('buku');

        $this->belongsTo(
            'id_penulis',
            Penulis::class,
            'id_penulis',
            [
                'reusable' => true,
                'alias'    => 'penulis'
            ]
        );

        $this->belongsTo(
            'id_tipe',
            Tipe::class,
            'id_tipe',
            [
                'reusable' => true,
                'alias'    => 'tipe'
            ]
        );
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }

}