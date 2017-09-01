<?php

namespace App\Controller\Api\V1; // desde a raiz ate a pasta da versao da api

class DistrictsController extends AppController // o controller extende o appController da API e nao o principal
{

    public function index() {
        
        $districts = $this->Districts->find()->all();  // busca os dados no banco   /this/model/metodo/parametro
        $this->set('districts', $districts);          // manda os dados para a view
        $this->set('_serialize', ['districts']);       // formata os dados para JSON
        
    }
 
    
    
}