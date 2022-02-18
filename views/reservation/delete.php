<?php
if (isset($_POST['id_reservation'])) {
    $exitreservation = new ReservationControllers();
    $exitreservation->deleteReservation();
}


?>