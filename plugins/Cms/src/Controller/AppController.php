<?php

namespace Cms\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{

    public function initialize()
    {
        parent::initialize();

        $this->set("admin", $this->session->read("admin"));
    }
}
