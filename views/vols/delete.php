<?php
if (isset($_POST['id_vols'])) {
    $exitVols = new VolsControllers();
    $exitVols->deleteVols();
}


?>