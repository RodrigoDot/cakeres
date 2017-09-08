#RoadMap Criando um projeto RestFull utilizando CakePhp

--- 
First
--- 

import the cakephp skeleton
- run composer create- project - - prefer- dist cakephp\app NOMEDOPROJETO

--- 
Second
--- 

Create the migrations tables
- go to src/app
- run bin\cake bake migration CreateNOMEDATABELA
 
--- 
third
--- 

Edit the tables, after that 
- run bin\cake migrations migrate
- Now you have the database

--- 
4th
--- 

Import a theme
- import the theme on the root directory of the project
- ``composer require cakephp- brasil/twitter- bootstrap:dev- master``
- go to ``config\bootstrap.php and add Plugin::load('TwitterBootstrap');`` at the end os the file
- go to ``src\view\appview.php and add $this- >LoadHelper('Form', ['className'=>'TwitterBootstrap.Form']);`` on the initialize method
- go to ``src\controller\appcontroller.php and add $this- >viewBuilder()- >theme('TwitterBootstrap');``  on the initialize method
- go to ``src\controller\appcontroller.php and add $this- >viewBuilder()- >layout('adminlte');`` on the initialize method


--- 
5th thing to do 
--- 

- ativate the layout
- run this on console ``bin\cake twitter_bootstrap.publish all``
- now we have the layout files at ``src\template\element``
- run ``bin\cake bake all NOMEDATABELA - - theme TwitterBootstrap``

--- 
6th
--- 

- create the seeds
- run ``bin\cake bake seed NOMEDATABELA``

--- 
7th
--- 

- personalize the seeds 
- after you have your seed up with data
- run ``bin\cake migrations seed``
- now you have your test data in your database

--- 
8th
--- 

- create your API
- after create your controllers, you must create the routes to access them
- go to ``config/routes.php`` and add the routes that you need

--- 
9th
--- 

- now you can develop your views and that's it


--- 
10th
--- 

- how to install a CRUD package from outside
- example: ``composer require friendsofcake/crud``
- to load the plugin o can 
- run ``bin\cake plugin load NOMEDOPLUGIN`` 
- or
- go to ``src/config/bootstrap.php and add Plugin::load('NOMEDOPLUGIN');`` at the end of the file

--- 
11th
--- 

- integrate the new plugin to your API
- go to ```src/controller/api/v1/appcontroller inside the initialize() add $this- >loadComponent('Crud.Crud', [
    'action' =- [       // controllers que utilizarao o plugin
        "Crud.index"  
    ],
    'listeners' =- [ 
        "Crud.Api",             // carregamento da api
        'Crud.ApiPagination',   // componente da api para paginar os dados
        'Crud.ApiQueryLog',     // componente para debug nos eventos do banco   
        'Crud.Search'        // esse componente soh funciona apos integrar outro plugin
    ]  
]);```
- you have to include your controllers folowing the template above 

--- 
12th
--- 

- now you can use the plugin resources on the controllers of your class
- first you have to declare the plugin inside the class of your conotroller
- on your controller add ``use \Crud\Controller\ControllerTrait;``
```
class ExampleController extends AppController {
    use \Crud\Controller\ControllerTrait; 
} 
```
- now you can access all the methods from the Crud plugin

--- 
13th
--- 

- to activate the component SEARCH of the Crud plugin you need import another plugin
- run ``composer require friendsofcake/search``
- after download the plugin
- run ``bin\cake plugin load Search``
- now you can use the search component 
- to activate it you must go to ``src/model/YOURMODEL``
- and add ``$this- >addBehavior('Search.Search');`` in the initialize method

- configurate the search plugin
- go to ``src/model/YOURMODEL`` and add
```
- $this- >searchManager()
    - >add('search', 'Search.Like', [ //o primeiro parametro SEARCH pode ser nomeado como quiser e eh usado na url
        'before' =- true,
        'after' =- true,
        'fieldMode' =- 'OR',
        'comparisan' =- 'like',
        'wildcardAny' =- '*',
        'wildcardOne' =- '?',
        'field' =- [
            'title'
        ]
    ]);
```    
--- 
14th
--- 

- use a json pattern 
- run ``composer require neomerx/json- api``
- go to ``src/controller/api/v1/appcontroller``
- and change the follow line 
- ``'Crud.Api'`` by this ``'Crud.JsonApi'``

    




