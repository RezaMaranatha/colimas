<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Upgrade extends Model
{
    public $id_upgrade;
    public $id_user;
    public $tanggal_pengajuan;
    public $tanggal_penyetujuan;
    public $status_upgrade;

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
        $this->setSource('upgrade');

        $this->belongsTo(
            'id_user',
            Users::class,
            'id_user',
            [
                'reusable' => true,
                'alias'    => 'user'
            ]
        );
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }

}