<?php

namespace App\Controller\Api\V1; // desde a raiz ate a pasta da versao da api

class UsersController extends AppController // o controller extende o appController da API e nao o principal
{

    public function index() {
        
        $users = $this->Users->find()->all();  // busca os dados no banco
        $this->set('users', $users);          // manda os dados para a view
        $this->set('_serialize', ['users']);       // formata os dados para JSON
        
    }
 
    
    
}