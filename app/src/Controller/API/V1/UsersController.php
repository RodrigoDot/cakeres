<?php

namespace App\Controller\Api\V1; // desde a raiz ate a pasta da versao da api

use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Firebase\JWT\JWT;

class UsersController extends AppController // o controller extende o appController da API e nao o principal
{

    //use \Crud\Controller\ControllerTrait;   
    
    public function initialize() {
        
        parent::initialize();
        $this->Auth->allow(['add', 'token']);
        
    } 
    
    public function add() {
        
        $this->Crud->on('afterSave', function(Event $event) {
            if($event->subject->created) {
                $this->set('data', [
                    'id' => $event->subject->entity->id,
                    'token' => JWT::encode(
                        [
                            'sub' => $event->subject->entity->id,
                            'exp' => time() + 604800
                        ],
                        Security::salt()
                    )
                ]);
            }
        });
        return $this->Crud->execute();
    }
    
    public function token() {
        
        $user = $this->Auth->identify();
        
        if(!$user) {
            throw new UnauthorizedException('Invalid username or password');
        }
        
        $this->set([
            'success' => true,
            'data' => [
                'token' => JWT::encode(
                    [
                    'sub' => $user['id'],
                    'exp' => time() + 604800
                    ],
                    Security::salt()                   
                )
            ],
            '_serialize' => ['success', 'data']
        ]);
    }
    
}