# RoadMap Criando um projeto RestFull utilizando CakePhp

---
First
---

## Import the cakephp skeleton
- run ``composer create-project --prefer-dist cakephp\app NOMEDOPROJETO``

---
Second
---

## Create the migrations tables
- go to ``src/app``
- run ``bin\cake bake migration CreateNOMEDATABELA``

---
third
---

## Edit the tables, after that
- run ``bin\cake migrations migrate``
- Now you have the database

---
4th
---

## Import a theme
- import the theme on the root directory of the project
- ``composer require cakephp-brasil/twitter-bootstrap:dev-master``
- go to ``config\bootstrap.php`` and add ``Plugin::load('TwitterBootstrap');`` at the end os the file
- go to ``src\view\appview.php`` and add ``$this->LoadHelper('Form', ['className'=>'TwitterBootstrap.Form']);`` on the initialize method
- go to ``src\controller\appcontroller.php`` and add ``$this->viewBuilder()->theme('TwitterBootstrap');``  on the initialize method
- go to ``src\controller\appcontroller.php`` and add ``$this->viewBuilder()->layout('adminlte');`` on the initialize method


---
5th thing to do
---

## Ativate the layout
- run this on console ``bin\cake twitter_bootstrap.publish all``
- now we have the layout files at ``src\template\element``
- run ``bin\cake bake all NOMEDATABELA --theme TwitterBootstrap``

---
6th
---

## Create the seeds
- run ``bin\cake bake seed NOMEDATABELA``

---
7th
---

## Personalize the seeds
- after you have your seed up with data
- run ``bin\cake migrations seed``
- now you have your test data in your database

---
8th
---

## Create your API
- after create your controllers, you must create the routes to access them
- go to ``config/routes.php`` and add the routes that you need

---
9th
---

## Now you can develop your views and that's it

---
10th
---

## How to install a CRUD package from outside
- example: ``composer require friendsofcake/crud``
- to load the plugin o can
- run ``bin\cake plugin load NOMEDOPLUGIN``
- or
- go to ``src/config/bootstrap.php and add Plugin::load('NOMEDOPLUGIN');`` at the end of the file

---
11th
---

## Integrate the new plugin to your API
- go to ``src/controller/api/v1/appcontroller`` inside the initialize() add
```php
$this- >loadComponent('Crud.Crud', [
    'action' => [       // controllers que utilizarao o plugin
        "Crud.index"  
    ],
    'listeners' => [
        "Crud.Api",             // carregamento da api
        'Crud.ApiPagination',   // componente da api para paginar os dados
        'Crud.ApiQueryLog',     // componente para debug nos eventos do banco   
        'Crud.Search'        // esse componente soh funciona apos integrar outro plugin
    ]  
]);
```
- you have to include your controllers folowing the template above

---
12th
---

## Now you can use the plugin resources on the controllers of your class
- first you have to declare the plugin inside the class of your conotroller
- on your controller add ``use \Crud\Controller\ControllerTrait;``
```php
class ExampleController extends AppController {
    use \Crud\Controller\ControllerTrait;
}
```
- now you can access all the methods from the Crud plugin

---
13th
---

## To activate the component SEARCH of the Crud plugin you need import another plugin
- run ``composer require friendsofcake/search``
- after download the plugin
- run ``bin\cake plugin load Search``
- now you can use the search component
- to activate it you must go to ``src/model/YOURMODEL``
- and add ``$this->addBehavior('Search.Search');`` in the initialize method

- configurate the search plugin
- go to ``src/model/YOURMODEL`` and add
```php
$this->searchManager()
    ->add('search', 'Search.Like', [ //o primeiro parametro SEARCH pode ser nomeado como quiser e eh usado na url
        'before' => true,
        'after' => true,
        'fieldMode' => 'OR',
        'comparisan' => 'like',
        'wildcardAny' => '*',
        'wildcardOne' => '?',
        'field' => [
            'title'
        ]
    ]);
```    
---
14th
---

## Use a json pattern
- run ``composer require friendsofcake/crud-json-api``
- go to ``src/controller/api/v1/appcontroller``
- and change the follow line
- ``'Crud.Api'`` by this ``'CrudJsonApi.JsonApi'``
- ``'Crud.ApiPagination'`` by this ``'CrudJsonApi.Pagination'``

---
15th
---

## Observation while requiring something using the json-api
- after add the json-api plugin you will need declare the follow on the head of the requisition
- ``[{"key":"Accept","value":"application/vnd.api+json"}]``

---
16th
---

## Defining the authentication
### Including the jwt plugin
- run ``composer require admad/cakephp-jwt-auth``
### Activate the puglin, add it to the bootstrap.php
- go to ``src/config/bootstrap.php``
- add ``Plugin::load('ADmad/JwtAuth');`` or
- run ``bin\cake plugin load ADmad/JwtAuth``

---
17th
---

## Configurate the api appcontroller
- add the follow code to the initialize method
```php
$this->loadComponent('Auth', [
    'storage' => 'Memory',
    'authenticate' => [
        'Form' => [
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
```        

---
18th
---

## Configurate the new routes
- go to ``src/config/routes.php``
- add the routes that you need

---
19th
---

## Registering a new user
- you have to do a POST request to users with the follow data on the header
    - key = action, value = application/vnd.api+json
    - key = Content-Type, value = application/vnd.api+json
- and the follow data on the body
```php
    {
    "username" : "Rodrigo110",
    "password" : "123",
    "active" : true    
    }
```

---
20th
---

## Getting a token
- do a post to ``http://localhost:8765/api/v1/users/token.json``
- you have to do a POST request to users/token with the follow data on the header
    - key = action, value = application/vnd.api+json
    - key = Content-Type, value = application/vnd.api+json
- and the follow data on the body
```php
    {
    "username" : "Rodrigo110",
    "password" : "123"
    }
```

---
21th
---

## How to do requests
- do a request to ``http://localhost:8765/api/v1/properties``
- to make requests you will have to pass on the header
    - key = action, value = application/vnd.api+json
    - key = Content-Type, value = application/vnd.api+json
    - key = authorization, value = Bearer TokenDoUsuario

---
22th
---

## Fix cors problem
- run ``composer require ozee31/cakephp-cors``
- run ``bin\cake plugin load Cors --bootstrap``
    - the second parameter '--bootstrap' is passed to set the lugin as true on the bootstrap.php file
