<?php
include('validations.php');
include __DIR__.'/../partial/header.php';
include __DIR__.'/startSession.php';
//Process Registration
if (count($_POST)) {

    /*
     * Covert POST into a Collection object
     * for better values handling
     */
    $input = new \ptejada\uFlex\Collection($_POST);

    /*
     * If the form fields names match your DB columns then you can reduce the collection
     * to only those expected fields using the filter() function
     */
    $input->filter('Username', 'Email', 'Password', 'Password2');

    /*
     * Register the user
     * The register method takes either an array or a Collection
     */
    $user->register($input);

}
