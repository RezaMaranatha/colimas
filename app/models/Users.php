<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id_user;
    public $nama;
    public $email;
    public $pass;
    public $jenis_kel;
    public $membership_type;
    public $profile_pict;
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
        $this->setSource('users');

        $this->hasMany(
            'id_peminjaman',
            Peminjaman::class,
            'id_peminjaman',
            [
                'reusable' => true,
                'alias'    => 'peminjaman'
            ]
        );
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }

}