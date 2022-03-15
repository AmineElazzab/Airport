<?php
// error_reporting(0);
if (isset($_POST['submit'])) {
    //Redirect::client();
    Redirect::to('../client/login');
} else {


    $data = new VolsControllers();
    $vols = $data->getALLVols();
}
if((isset($_POST['inlineRadioOptions1'])) && (isset($_POST['find']) )){

    $data = new VolsControllers();
    $vols = $data->findVolsDate();

}
if((isset($_POST['inlineRadioOptions2']) && (isset($_POST['find'])))){

        $data = new VolsControllers();
        $vols = $data->findVolsDate1();

}




?>

<body class="bg-dark">



    <div class="container">
        <div class=" text-center py-5 ">

        </div>
        <div class="row ">
            <div class="col-sm  ">
                <section>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="p-3 mb-2 bg-warning text-dark">Date_D</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">Date_A</th>
                                <th scope="col" class="p-3 mb-2 bg-warning text-dark">VD</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">VA</th>
                                <th scope="col" class="p-3 mb-2 bg-warning text-dark">AD</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">AR</th>
                                <th scope="col" class="p-3 mb-2 bg-warning text-dark">HD</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">HA</th>
                                <th scope="col" class="p-3 mb-2 bg-warning text-dark">Prix_vol</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">Seats</th>




                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($vols as $vols) { ?>
                                <tr>

                                    <td ><?php echo ($vols['date_depart']); ?></td>
                                    <td><?php echo ($vols['date_arrivee']); ?></th>
                                    <td><?php echo ($vols['ville_depart']); ?></td>
                                    <td><?php echo ($vols['ville_arrivee']); ?></td>
                                    <td><?php echo ($vols['airoport_depart']); ?></th>
                                    <td><?php echo ($vols['airoport_arrivee']); ?></td>
                                    <td><?php echo ($vols['heure_depart']); ?></td>
                                    <td><?php echo ($vols['heure_arrivee']); ?></th>
                                    <td><?php echo ($vols['prix_vol']); ?></td>
                                    <td><?php echo ($vols['available_seats']); ?></td>
                                </tr>
                            <?php }; ?>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    <div>
        <h3 class="text-center text-white pt-5"><img src="../img/IL MEGLIO.png"></h3>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <form method="post" class="mx-0">
                            <div class="row p-5 ">

                                <input type="submit" name="submit" class="btn btn-warning btn-lg" value="Reserver">


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>