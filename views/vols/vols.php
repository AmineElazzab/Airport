<?php

if (isset($_POST['find'])) {
    $data = new VolsControllers();
    $vols = $data->findVols();
} else {

    $data = new VolsControllers();
    $vols = $data->getALLVols();
}

?>
<body id="body-pd">
    <header class="header bg-dark" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="bg-light">  <?php  echo $_SESSION['nom']."    ".$_SESSION['prenom'];?> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name"> <img src="../ass/img/IL MEGLIO2.png"></span> </a>
                <div class="nav_list"> <a href="<?php echo BASE_URL; ?>" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">HOME</span> </a> <a href="<?php echo BASE_URL; ?>pilote/pilote" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Pilote</span> </a> <a href="<?php echo BASE_URL; ?>avion/avion" class="nav_link"> <i class='bx bxs-paper-plane'></i> <span class="nav_name">Avion</span> </a> <a href="<?php echo BASE_URL; ?>client/client" class="nav_link "> <i class='bx bxs-user-rectangle'></i> <span class="nav_name">Client</span> </a> <a href="<?php echo BASE_URL; ?>vols/vols" class="nav_link active"> <i class='bx bxs-plane'></i> <span class="nav_name">Vols</span> </a> <a href="<?php echo BASE_URL; ?>reservation/reservation" class="nav_link "> <i class='bx bx-book-reader'></i> <span class="nav_name">Réservation</span> </a>  </div>
            </div> <a href="<?php echo BASE_URL; ?>logout/logout" title="Déconnexion" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>


 

        <div class="container py-5">
        <h1> Vols </h1>
            <div class="row my-4">
                <div class=" col-md-12 mx-auto">
               <?php include('./views/includes/alert.php'); ?> 
                    <div class="card">
                        <div class=" car-body  bg-light p-4">
                            <a href="<?php echo BASE_URL; ?>vols/add"> <button class="btn btn-sm btn-info "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg> </button> </a>
                            <a href="<?php echo BASE_URL; ?>vols/vols"> <button class="btn btn-sm btn-info"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg> </button> </a>

                            <a href="<?php echo BASE_URL; ?>logout" title="Déconnexion"> <button class="btn btn-sm btn-info "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></button> </a>
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
                                     
                                        <th scope="col">Date_D</th>
                                        <th scope="col">Date_A</th>
                                        <th scope="col">VD</th>
                                        <th scope="col">VALUES</th>
                                        <th scope="col">AD</th>
                                        <th scope="col">AR</th>
                                        <th scope="col">HD</th>
                                        <th scope="col">HA</th>
                                        <th scope="col">P_vol</th>
                                        <th scope="col">id_pilote</th>
                                        <th scope="col">id_avion</th>
        

                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($vols as $vols) { ?>
                                    <tr>
                                       
                                        <td><?php echo ($vols['date_depart']); ?></td>
                                        <td><?php echo ($vols['date_arrivee']); ?></th>
                                        <td><?php echo ($vols['ville_depart']); ?></td>
                                        <td><?php echo ($vols['ville_arrivee']); ?></td>
                                        <td><?php echo ($vols['airoport_depart']); ?></th>
                                        <td><?php echo ($vols['airoport_arrivee']); ?></td>
                                        <td><?php echo ($vols['heure_depart']); ?></td>
                                        <td><?php echo ($vols['heure_arrivee']); ?></th>
                                        <td><?php echo ($vols['prix_vol']); ?></td>
                                        

                                        <td class="d-flex flex-row ">

                                            <form method="post" class="mx-4" action="update">

                                                <input type="hidden" name="id_vols" value="<?php echo ($vols['id_vols']); ?>">
                                                <button class="btn btn-sm btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></button>

                                            </form>

                                            <form method="post" class="mx-0" action="delete">

                                                <input type="hidden" name="id_vols" value="<?php echo ($vols['id_vols']); ?>">
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
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../ass/js/sidebar.js"></script>
</body>

</html>