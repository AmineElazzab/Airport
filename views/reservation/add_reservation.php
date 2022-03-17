<?php

if($_SESSION['role']==1){
    header("Location: http://localhost/me/airport/");

}


if (isset($_POST['id_vols'])) {
    $exitvols= new VolsControllers();
    $vols = $exitvols->getOneVols();
   
}else{
    Redirect::to('vols');

}

if (isset($_POST['submit'])) {

    $data = new ReservationControllers();
    $data->addReservation();
    $pass = new PassagerControllers();
    $pass->addPassager();
}



 


?>
<head>
    <link rel="shortcut icon" href="../assets/images/logo1.png" />
</head>
<body class="bg-dark">
    <div>
    <a href="<?php echo BASE_URL; ?>reservation/vols"> <button class="btn btn-sm btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg> </button> </a>
        <h3 class="text-center text-white pt-5"><img src="../img/IL MEGLIO.png"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-warning">Ajouter Reservation</h3>
                            <div class="form-group" style="">
                                <label for="id_client" class="text-warning">id_client:</label><br>
                                <input type="text" READONLY name="id_client" id="id_client" value="<?php  echo $_SESSION['id_client'];?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="nom" class="text-warning">nom_prenom:</label><br>
                                <input type="text" READONLY name="nom" id="nom" value="<?php  echo $_SESSION['nom']." ". $_SESSION['prenom'];?>" class="form-control">
                            </div>

                            <div class="form-group" style="">
                                <label for="id_vols" class="text-warning">id_vols:</label><br>
                                <input type="text" READONLY name="id_vols" id="id_vols" value="<?php echo $vols->id_vols; ?>" class="form-control">
                            </div>


                            <div class="form-group py-3 ">
                                <label for="nbr_passager" class="text-warning">nbr_passager:</label><br>
                                <input type="text" name="nbr_passager" id="nbr_passager" value="0"  class="form-control">
                            </div>

                            <div class="form-group mb-4" id="passager"></div>
                            <div class="row p-5">
                                <input type="submit" name="submit" class="btn btn-warning btn-lg" value="submit">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../ass/js/addfromss.js"></script>
</body>
