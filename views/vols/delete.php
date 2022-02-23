<?php

if($_SESSION['role']==0){
    header("Location: http://localhost/me/airport/");

}

if (isset($_POST['id_vols'])) {
    $exitVols = new VolsControllers();
    $exitVols->deleteVols();
}


?>