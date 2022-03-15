<?php
error_reporting(0);
require_once './views/includes/header.php';
require_once  './autoload.php';
require_once './controllers/HomeControllers.php';
require_once './controllers/VolsControllers.php';
require_once './views/includes/alert.php';




$home=new HomeController();

$pages=['index/index','index/vols','avion/avion','avion/Dashboard','avion/update','avion/add','avion/delete','client/delete','client/client','client/update','client/add','client/login','vols/vols','vols/update','vols/add','vols/delete','reservation/vols','reservation/reserver','reservation/add_reservation','reservation/reservation','reservation/delete','logout/logout','reservation/imprimer'];

//Indique si une valeur appartient à un tableau





if(isset($_GET['url'])){

    $url = rtrim($_GET['url'], '/');//Supprime les espaces (ou d'autres caractères) de fin de chaîne
    $url = filter_var($url, FILTER_SANITIZE_URL); //filtre une variable avec le filtre spécifié. && Supprime tous les caractères sauf les lettres, chiffres et $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    $url = explode('/', $url); // divise une chaîne en un tableau.
    $redirect = $url[0];
    if($url[1]){
        $redirect = $url[0]. '/' .$url[1];
    }
    if(in_array($redirect,$pages))
    {
        $page=$redirect;
        $home->index($page);

    }
    else{
        include('views/includes/404.php');
    }
}
else
{
    $home->index('index/index');
    require_once './views/includes/footer.php';
}
