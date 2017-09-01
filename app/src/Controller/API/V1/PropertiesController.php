<?php

namespace App\Controller\Api\V1;

class PropertiesController extends Controller
{

    public function initialize()
    {

        public function index() {
            $properties = $this->Properties->find()->all();
        }
 
    }
    
}