<?php

if (isset($_POST['id_reservation'])) {
    $data = new ReservationControllers();
    $reservation = $data->imprimer();
}

?>
<body>
<div class="container-fluid">
  <h1 class="text-center p-5">Impression de résérvation</h1>

  <div class="row py-2">
    <div class="col-sm-3 h3" style="background-color:lavender;">Nom : <?php echo ($_SESSION['nom']); ?></div>
    <div class="col-sm-3 h3" style="background-color:lavenderblush;">Prenom :  <?php echo ($_SESSION['prenom']); ?></div>
    <div class="col-sm-3 h3" style="background-color:lavender;">cin :  <?php echo ($reservation->cin); ?></div>
    <div class="col-sm-3 h3" style="background-color:lavenderblush;">telephone :  <?php echo ($reservation->telephone); ?></div>
  </div>
  <div class="row py-2">
    <div class="col-sm-4 h3" style="background-color:lavender;">ville depart : <?php echo ($reservation->ville_depart); ?></div>
    <div class="col-sm-4 h3" style="background-color:lavenderblush;">ville arrivee :  <?php echo ($reservation->ville_arrivee); ?></div>
    <div class="col-sm-4 h3" style="background-color:lavender;">prix vol :  <?php echo ($reservation->prix_vol).' DH'; ?></div>
  </div>
  <div class="row py-2">
    <div class="col-sm-6 h3" style="background-color:lavender;">Num pilote : <?php echo ($reservation->num_pilote); ?></div>
    <div class="col-sm-6 h3" style="background-color:lavenderblush;">Nombre passager :  <?php echo ($reservation->nbr_passager); ?></div>
  </div>
  <div class="row py-2">
    <div class="col-sm-6 h3" style="background-color:lavender;">Marque d'avion : <?php echo ($reservation->marque); ?></div>
    <div class="col-sm-6 h3" style="background-color:lavenderblush;">Capacité d'avion :  <?php echo ($reservation->capacite); ?></div>
  </div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../ass/js/sidebar.js"></script>
</body>

</html>