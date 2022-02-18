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

<body>



    <div class="container">
        <div class=" text-center py-5 ">

        </div>
        <div class="row ">
            <div class="col-sm ">
                <section>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date_D</th>
                                <th scope="col">Date_A</th>
                                <th scope="col">VD</th>
                                <th scope="col">VA</th>
                                <th scope="col">AD</th>
                                <th scope="col">AR</th>
                                <th scope="col">HD</th>
                                <th scope="col">HA</th>
                                <th scope="col">Prix_vol</th>



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
                                </tr>
                            <?php }; ?>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    <div>
        <h3 class="text-center text-white pt-5"><img src="../ass/img/IL MEGLIO2.png"></h3>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <form method="post" class="mx-0">
                            <div class="row p-5 ">

                                <input type="submit" name="submit" class="btn btn-info btn-lg" value="Reserver">


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>