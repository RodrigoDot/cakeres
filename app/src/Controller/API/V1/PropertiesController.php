<?php

namespace App\Controller\Api\V1; // desde a raiz ate a pasta da versao da api

class PropertiesController extends AppController // o controller extende o appController da API e nao o principal
{

    public function index() {
        
        $properties = $this->Properties->find()->all();  // busca os dados no banco
        $this->set('properties', $properties);          // manda os dados para a view
        $this->set('_serialize', ['properties']);       // formata os dados para JSON
        
    }
 
    
    
}