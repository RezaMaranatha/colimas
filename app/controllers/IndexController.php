<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");

class IndexController extends ControllerBase
{
    public function initialize()
    {
        // $this->view->users = Users::find();
    }

    public function indexAction()
    {
        
    }
}

