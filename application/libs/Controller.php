
<?php


class Controller {

  

 public function loadModel($modelNome) {
        require "application/models/".$modelNome . ".php";
        return new $modelNome();
    }
    
    
 
    
    
    /// esse controler manipula as models e views 
   // o application e somente para dar a rota
 

}


