<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <meta charset="UTF-8">
    <title></title>
 </head>
    <body>
         <?php if (file_exists('vendor/autoload.php')) {
                 require 'vendor/autoload.php';
               }
               include_once './application/libs/Application.php';
    
                                      // include_once 'application/controller/Home.php';
                                 // include_once './application/libs/Controller.php';
               $app = new Application();
         ?>
    </body>
</html>
