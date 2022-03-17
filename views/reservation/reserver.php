<?php

if($_SESSION['role']==1){
    header("Location: http://localhost/me/airport/");

}


if (isset($_POST['find'])) {
    $data = new ReservationControllers();
    $reservation = $data->findReservation();
} else {

    $data = new ReservationControllers();
    $reservation = $data->getAllReservation();
}

?>
<head>
    <link rel="shortcut icon" href="../assets/images/logo1.png" />
</head>
<body class="" style="background-image: url(../images/bg.jpg);">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="../img/IL MEGLIO.PNG" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form method="post" class="me-3">
                
            </form>
            <ul class="navbar-nav me-auto mb-auto mb-lg-auto">
            <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>reservation/vols" class="nav-link"><p class="text-warning">Vols</p></a>
             </li>
            <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="#"><p class="text-warning">Réservation</p></a>
             </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                <li class="nav-item">
                    <a class="nav-link" href=""><?php  echo $_SESSION['nom']."    ".$_SESSION['prenom'] ;?></a>
                </li>
                <li class="nav-item me-3 me-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/YouCodeSchool.png"  width="32" height="32" class="rounded-circle" >
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>logout/logout">LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
           
        
    </div>



    <div class="container py-5">
        <h1> Reservation </h1>
        <div class="row my-4">
            <div class=" col-md-12 mx-auto">
                <?php include('./views/includes/alert.php'); ?>
                <div class="card">
                    <div class=" car-body  bg-light p-4">
                    <div class="table-responsive">
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


                                 <td class="d-flex flex-row ">

                                

                                <form method="post" class="mx-0" action="delete">

                                    <input type="hidden" name="id_reservation" value="<?php echo ($reservation['id_reservation']); ?>">
                                    <button class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg></button>

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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../ass/js/sidebar.js"></script>
</body>

</html>