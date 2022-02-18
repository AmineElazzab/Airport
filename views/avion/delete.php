<?php
if (isset($_POST['id_avion'])) {
    $exitAvion = new AvionControllers();
    $exitAvion->deleteAvion();
}


?>