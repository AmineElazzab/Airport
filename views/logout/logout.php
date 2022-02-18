<?php
    // UserController::logout();
    // Redirect::to('login');

    $logoutuser = new LoginControllers();
    $logoutuser->logout();
    unset($_SESSION["nom"]);
    unset($_SESSION["prenom"]);
    Redirect::to('../client/login');
