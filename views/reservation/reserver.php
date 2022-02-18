<?php

if (isset($_POST['find'])) {
    $data = new ReservationControllers();
    $reservation = $data->findReservation();
} else {

    $data = new ReservationControllers();
    $reservation = $data->getReservation();
}

?>

<body id="body-pd">
    <header class="header bg-dark" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="bg-light"> <?php echo $_SESSION['nom'] . "    " . $_SESSION['prenom']; ?> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="<?php echo BASE_URL; ?>" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name"> <img src="../ass/img/IL MEGLIO2.png"></span> </a>
                <div class="nav_list"> <a href="<?php echo BASE_URL; ?>" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">HOME</span> </a> <a href="<?php echo BASE_URL; ?>reservation/reserver" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Reservation</span> </a> <a href="<?php echo BASE_URL; ?>reservation/vols" class="nav_link"> <i class='bx bxs-plane'></i><span class="nav_name">vols</span> </a> </div>
            </div> <a href="<?php echo BASE_URL; ?>logout/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
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
                            <button class="btn btn-info btn-sm" name="find">
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



                                        <td class="d-flex flex-row ">

                                            <form method="post" class="mx-4" action="imprimer">

                                                <input type="hidden" name="id_reservation" value="<?php echo ($reservation['id_reservation']); ?>">
                                                <button class="btn btn-sm btn-warning">Imprimer</button>

                                            </form>



                                        </td>

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