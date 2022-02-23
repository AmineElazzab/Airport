<?php

if($_SESSION['role']==0){
    header("Location: http://localhost/me/airport/");

}

if (isset($_POST['id_avion'])) {
    $exitAvion = new AvionControllers();
    $exitAvion->deleteAvion();
}


?>