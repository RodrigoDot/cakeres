<?php

namespace App\Controller\Api\V1;

use Cake\Controller\Controller;

class AppController extends Controller
{

    public function initialize()
    {

        parent::initialize();
        
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Crud.Crud', [
            'actions' => [       // controllers que utilizarao o plugin
                'Crud.Index',  
                'Crud.View',  
                'Crud.Add',  
                'Crud.Edit',  
                'Crud.Delete'  
            ],
            'listeners' => [ 
                'Crud.JsonApi',             // carregamento da api
                'Crud.ApiPagination',   // componente da api para paginar os dados
                'Crud.ApiQueryLog',     //    
                'Crud.Search'        //
                ]  
            ]);
    }
    
}
