<?php

namespace App\Controller\Api\V1;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize()
    {

        $this->loadComponent('RequestHandler');
 
    }
    
}
