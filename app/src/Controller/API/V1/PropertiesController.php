<?php

namespace App\Controller\Api\V1; // desde a raiz ate a pasta da versao da api

class PropertiesController extends AppController // o controller extende o appController da API e nao o principal
{

    use \Crud\Controller\ControllerTrait;    
    
    public function view($id = null)
    {
        $this->Crud->on('beforeFind', function(\Cake\Event\Event $event) {
            $event->subject()->query->contain([
                'PropertiesTypes',
                'Districts'
            ]);
        });
        
        return $this->Crud->execute();    
            
    }
    
}