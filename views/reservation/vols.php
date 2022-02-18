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
        <div class="bg-light" > <?php  echo $_SESSION['nom']."    ".$_SESSION['prenom'];?> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="<?php echo BASE_URL;?>" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name"> <img src="../ass/img/IL MEGLIO2.png"></span> </a>
                <div class="nav_list"> <a href="<?php echo BASE_URL;?>" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">HOME</span> </a> <a href="<?php echo BASE_URL; ?>reservation/reserver" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Reservation</span> </a> <a href="<?php echo BASE_URL; ?>reservation/vols" class="nav_link active"> <i class='bx bxs-plane'></i><span class="nav_name">vols</span> </a> </div>
            </div> <a href="<?php echo BASE_URL; ?>logout/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

 

        <div class="container py-5">
        <h1> VOLS </h1>
            <div class="row my-4">
                <div class=" col-md-12 mx-auto">
               <?php include('./views/includes/alert.php');?> 
                    <div class="card">
                        <div class=" car-body  bg-light p-4">
                            <a href="<?php echo BASE_URL; ?>reservation/vols"> <button class="btn btn-sm btn-info"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg> </button> </a>
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
                                        <th scope="col">id</th>
                                        <th scope="col">Date_D</th>
                                        <th scope="col">Date_A</th>
                                        <th scope="col">VD</th>
                                        <th scope="col">VALUES</th>
                                        <th scope="col">AD</th>
                                        <th scope="col">AR</th>
                                        <th scope="col">HD</th>
                                        <th scope="col">HA</th>
                                        <th scope="col">P_vol</th>
                            
        

                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($vols as $vols) { ?>
                                    <tr>
                                        <td><?php echo ($vols['id_vols']); ?></td>
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

                                            <form method="post" class="mx-4" action="add_reservation">

                                                <input type="hidden" name="id_vols" value="<?php echo ($vols['id_vols']); ?>">
                                                <button class="btn btn-sm btn-warning">Réserver</button>

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