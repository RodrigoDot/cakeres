<?php

namespace App\Controller\Api\V1;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize()
    {

        parent::initialize();
        
        $this->loadComponent('RequestHandler');
 
    }
    
}



Instalando e configurando o pacote de CRUDs 