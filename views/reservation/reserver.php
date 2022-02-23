<?php

if($_SESSION['role']==1){
    header("Location: http://localhost/me/airport/");

}


if (isset($_POST['find'])) {
    $data = new ReservationControllers();
    $reservation = $data->findReservation();
} else {

    $data = new ReservationControllers();
    $reservation = $data->getReservation();
}

?>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <!-- <a class="navbar-brand" href="#"><h1>IL MEGLIO.</h1></a> -->
  <a class="navbar-brand"><img src="../img/IL MEGLIO.PNG"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
    <ul class="nav nav-tabs">
      <li class="nav-item active">
      <a href="<?php echo BASE_URL; ?>reservation/vols" class="nav-link"><p class="text-warning">Vols</p></a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>reservation/reserver" class="nav-link"><p class="text-warning">Réservation</p></a>
      </li>
      </ul>
  </div>
      <div class="text-light">  <?php  echo $_SESSION['nom']."    ".$_SESSION['prenom'] ;?> </div>
  <a href="<?php echo BASE_URL; ?>logout/logout" title="Déconnexion">SignOut</a>
</nav>
           
        
    </div>



    <div class="container py-5">
        <h1> Reservation </h1>
        <div class="row my-4">
            <div class=" col-md-12 mx-auto">
                <?php include('./views/includes/alert.php'); ?>
                <div class="card">
                    <div class=" car-body  bg-light p-4">
                        <form class="float-end d-flex flex-row" method="post">
                            <input type="text" name="search" placeholder="search">
                            <button class="btn btn-warning btn-sm" name="find">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">nbr_passager</th>
                                    <th scope="col">ville_depart</th>
                                    <th scope="col">ville_arrivee</th>




                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($reservation as $reservation) { ?>
                                    <tr>
                                        <td><?php echo ($reservation['nom']); ?></td>
                                        <td><?php echo ($reservation['prenom']); ?></td>
                                        <td><?php echo ($reservation['nbr_passager']); ?></td>
                                        <td><?php echo ($reservation['ville_depart']); ?></th>
                                        <td><?php echo ($reservation['ville_arrivee']); ?></td>



                                        <!-- <td class="d-flex flex-row ">

                                            <form method="post" class="mx-4" action="imprimer">

                                                <input type="hidden" name="id_reservation" value="<?php echo ($reservation['id_reservation']); ?>">
                                                <button class="btn btn-sm btn-warning">Imprimer</button>

                                            </form>



                                        </td> -->

                                    </tr>

                                <?php }; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../ass/js/sidebar.js"></script>
</body>

</html>