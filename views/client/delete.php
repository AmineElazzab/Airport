<?php
error_reporting(0);

if (isset($_POST['id_client'])) {
    $exitClient = new ClientControllers();
    $exitClient->deleteClient();
}


?>