<?php
    include(__DIR__.'/../uFlex/autoload.php');

    //Instantiate the User object
    $user = new ptejada\uFlex\User();

    // Add database credentials
    $user->config->database->host = 'localhost';
    $user->config->database->user = 'usersql';
    $user->config->database->password = 'pwduser';
    $user->config->database->name = 'PHP_PROJECT'; //Database name

    // OR if in your project you already have a PDO connection
    // $user->config->database->pdo = $existingPDO;

    /*
     * You can update any customizable property of the class before starting the object
     * construction process
     */

    //Start object construction
    $user->start();
?>
