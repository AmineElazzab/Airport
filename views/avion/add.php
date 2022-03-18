<?php
// if (!isset($_SESSION['cin'])) {
//     if($_SESSION['role']==0){
//     header("Location: http://localhost/me/airport/");
// }
// }
// error_reporting(0);
if($_SESSION['role']==0){
    header("Location: http://localhost/me/airport/");

}
if (isset($_POST['submit'])) {
    $Avion = new AvionControllers();
    $Avion->addAvion();
}





?>
<head>
    <link rel="shortcut icon" href="../assets/images/logo1.png" />
</head>
<body class="img js-fullheight" style="background-image: url(../images/bg2.jpg);">
    <div>
    <a href="<?php echo BASE_URL; ?>avion/avion"> <button class="btn btn-sm btn-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg> </button> </a>
        <h3 class="text-center text-white pt-5"><img src="../img/IL MEGLIO.png"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-light">Ajouter Avion</h3>
                            <div class="form-group">
                                <label for="marque" class="text-light">Marque:</label><br>
                                <input type="text" name="marque" id="marque" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="typee" class="text-light">Type:</label><br>
                                <input type="text" name="typee" id="typee" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="capacite" class="text-light">Capacité:</label><br>
                                <input type="text" name="capacite" id="capacite" class="form-control" required>
                            </div>
                            <div class="row p-5">
                                <input type="submit" name="submit" class="btn btn-light btn-lg" value="submit" required>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
