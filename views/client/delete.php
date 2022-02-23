<?php
error_reporting(0);

if($_SESSION['role']==0){
    header("Location: http://localhost/me/airport/");

}

if (isset($_POST['id_client'])) {
    $exitClient = new ClientControllers();
    $exitClient->deleteClient();
}


?>