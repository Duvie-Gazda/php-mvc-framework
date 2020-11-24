<?php
   require_once './bootsrap.php';

   use app\core\Application;
   //  $app = new Application();
   //  $app->router->get('/',function(){
   //     return 'Hello world';
   //  });
   //$app->run();
   //use  app\controller\UK_Controller;
   // var_dump($data->files->logs->error);*/


$data = new UK\UK_DataBase();
//$data = file_get_contents($data->files->logs->error);
var_dump($data->getFromDB_ByQuery("SELECT * FROM `product`"));
