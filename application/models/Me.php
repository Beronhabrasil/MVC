<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query
 *
 * @author jonny
 */



class ME {
   
    static $db;
    
  
    
    private function connection() {
        self::$db = mysqli_connect("localhost", "root", "", "php-mvc");
       return self::$db;
        
        
    }
    public function GetConn() {
        return $this->connection(); 
    }
    
    
    public function query($sql) {
        return $this->connection()->query($sql); 
    }
    
}



