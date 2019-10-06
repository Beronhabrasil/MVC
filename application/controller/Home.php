<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Home
 *
 * @author jonny
 */
 include_once './application/libs/Controller.php';
    class Home extends Controller{
        private $songs;
        private $query;

        public function index(){
         require "application/views/wrapper.php";
        }
        public function getQuery(){ 
            $this->songs = $this->loadModel('ME');
            $this->query = $this->songs->query("select * from song");
            return $this->query;
        }

        public function loadForm(){
         require "application/views/form.php";
        }


        public function insert(){
           $artist  =  $_POST['artist'];
           $trank =  $_POST['trank'];
           $link =  $_POST['link'];
            if(isset($artist,$trank,$link)){
              echo "Value inserted"."<br>" .$artist."<br>".$link."<br>".$trank;
                $this->songs = $this->loadModel('ME');
                $test =   $this->songs->query("INSERT INTO song (`artist`, `track`, `link`) VALUES('$artist','$trank','$link')");
            }else {
             echo 'error';
            }
        }
    }
