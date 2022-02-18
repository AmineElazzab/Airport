<?php
if (isset($_POST['id_vols'])) {
    $exitvols= new VolsControllers();
    $vols = $exitvols->getOneVols();
   
}else{
    Redirect::to('vols');

}

if (isset($_POST['submit'])) {
    $exitvols = new VolsControllers();
    $exitvols->updateVols();
}


?>

<body class="bg-dark">
    <div>
        <a href="<?php echo BASE_URL; ?>vols/vols"> <button class="btn btn-sm btn-info"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg> </button> </a>
        <h3 class="text-center text-white pt-5"><img src="../ass/img/IL MEGLIO2.png"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">Update vols</h3>
                            <div class="form-group">
                                <label for="id_vols" class="text-info">id:</label><br>
                                <input type="text" name="id_vols" value="<?php echo $vols->id_vols; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date_depart" class="text-info">date_depart:</label><br>
                                <input type="date" name="date_depart" id="date_depart" value="<?php echo $vols->date_depart; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date_arrivee" class="text-info">date_arrivee:</label><br>
                                <input type="date" name="date_arrivee" id="date_arrivee" value="<?php echo $vols->date_arrivee; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ville_depart" class="text-info">ville_depart:</label><br>
                                <input type="text" name="ville_depart" id="ville_depart" value="<?php echo $vols->ville_depart; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ville_arrivee" class="text-info">ville_arrivee:</label><br>
                                <input type="text" name="ville_arrivee" id="ville_arrivee" value="<?php echo $vols->ville_arrivee; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="airoport_depart" class="text-info">airoport_depart:</label><br>
                                <input type="text" name="airoport_depart" id="airoport_depart" value="<?php echo $vols->airoport_depart; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="airoport_arrivee" class="text-info">airoport_arrivee:</label><br>
                                <input type="text" name="airoport_arrivee" id="airoport_arrivee" value="<?php echo $vols->airoport_arrivee; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="heure_depart" class="text-info">heure_depart:</label><br>
                                <input type="text" name="heure_depart" id="heure_depart" value="<?php echo $vols->heure_depart; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="heure_arrivee" class="text-info">heure_arrivee:</label><br>
                                <input type="text" name="heure_arrivee" id="heure_arrivee" value="<?php echo $vols->heure_arrivee; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prix_vol" class="text-info">prix_vol:</label><br>
                                <input type="prix_vol" name="prix_vol" id="prix_vol" value="<?php echo $vols->prix_vol; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="id_pilote" class="text-info">id_pilote:</label><br>
                                <input type="text" name="id_pilote" id="id_pilote" value="<?php echo $vols->id_pilote ; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="id_avion" class="text-info">id_avion:</label><br>
                                <input type="text" name="id_avion" id="id_avion" value="<?php echo $vols->id_avion ; ?>" class="form-control">
                            </div>
                            <div class="row p-5">
                                <input type="submit" name="submit" class="btn btn-info btn-lg" value="submit">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>