<?php

class HomeController{

    // function d'affichage d'accueil
    public function index($page){

        include('views/'.$page.'.php');
    }
	
}

?>