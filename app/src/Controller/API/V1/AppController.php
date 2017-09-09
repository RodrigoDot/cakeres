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
                'CrudJsonApi.JsonApi',             // carregamento da api
                'CrudJsonApi.Pagination',   // componente da api para paginar os dados
                'Crud.ApiQueryLog',     //    
                'Crud.Search'        //
                ]  
            ]);
        
        $this->loadComponent('Auth', [  //carrega o AUTH
            'storage' => 'Memory',      //armazena os dados em memoria ja que api nao tem sessao 
            'authenticate' => [         //valida os campos passados pelo form
                'Form' => [
                    'scope' => ['Users.active' => 1],
                ],
                'ADmad/JwtAuth.Jwt' => [                //configuracoes da api jwt
                    'parameter' => 'token',
                    'userModel' => 'Users',
                    'scope' => ['Users.active' => 1],
                    'fields' => [
                        'username' => 'id'
                    ],
                    'queryDatasource' => true
                ]
            ],
            'unauthorizedRedirect' => false,
            'checkAuthIn' => 'Controller.initialize'
        ]);
    }
    
}
