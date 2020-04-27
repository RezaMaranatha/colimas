<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function onConstruct(){
        // $this->assets->addCss("/css/util.css");
        // $this->assets->addCss("/css/main.css"); 
        // $this->assets->addCss("/css/style.css");
        // $this->assets->addCss("/css/reset.css"); 
    }
}
