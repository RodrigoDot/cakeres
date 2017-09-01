RoadMap Criando um projeto RestFull utilizando CakePhp

---
First
---

import the cakephp skeleton
> run composer create-project --prefer-dist cakephp\app NOMEDOPROJETO

---
Second
---

Create the migrations tables
> go to src/app
> run bin\cake bake migration CreateNOMEDATABELA
 
---
third
---

Edit the tables, after that 
> run bin\cake migrations migrate
> Now you have the database

---
Forth
---

Import a theme
> import the theme on the root directory of the project
> composer require cakephp-brasil/twitter-bootstrap:dev-master
> go to config\bootstrap.php and add Plugin::load('TwitterBootstrap'); at the end os the file
> go to src\view\appview.php and add $this->LoadHelper('Form', ['className'=>'TwitterBootstrap.Form']); on the initialize method
> go to src\controller\appcontroller.php and add $this->viewBuilder()->theme('TwitterBootstrap');  on the initialize method
> go to src\controller\appcontroller.php and add $this->viewBuilder()->layout('adminlte'); on the initialize method


---
fifth thing to do 
---

> ativate the layout
> run this on console bin\cake twitter_bootstrap.publish all
> now we have the layout files at src\template\element
> un bin\cake bake all NOMEDATABELA --theme TwitterBootstrap

---
sixth
---

> create the seeds
> run bin\cake bake seed NOMEDATABELA

---
seventh
---

> personalize the seeds 
> after you have your seed up with data
> run bin\cake migrations seed
> now you have your test data in your database

---
eighth
---

> create your API
> after create your controllers, you must create the routes to access them
> go to config/routes.php and add the routes that you need

---
ninth
---

> now you can develop your views and that`s it


---
tenth
---

> how to install a CRUD package from outside
> example > composer require friendsofcake/crud
> to load the plugin o can 
> run bin\cake plugin load NOMEDOPLUGIN 
> or
> go to src/config/bootstrap.php and add Plugin::load('NOMEDOPLUGIN'); at the end of the file

---
eleventh
---

> integrate the new plugin to your API
> go to src/controller/api/v1/appcontroller inside the initialize() add $this->loadComponent('Crud.Crud', [
    'action' => [       // controllers que utilizarao o plugin
        'Crud.index'  
    ],
    'listeners' => [ 
        'Crud.Api',             // carregamento da api
        'Crud.ApiPagination',   // componente da api para paginar os dados
        'Crud.ApiQueryLog',     //    
        'Crud.ApiSearch'        //
    ]  
]);
> you have to include your controllers folowing the above template

---
twoelveth
---

> now you can use the plugin resources on the controllers of your class
> first you have to declare the plugin inside the class of your conotroller
> on your controller add use \Crud\Controller\ControllerTrait;

class ExampleController extends AppController {
    use \Crud\Controller\ControllerTrait; 
} 

> now you can access all the methods from the Crud plugin




