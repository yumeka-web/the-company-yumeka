<?php
    include "../classes/User.php";

    //create an obj
    $user = new User;

    //call the method
    $user->login($_POST);

    //$_POST - hplds the data from the form views > index.php

    /*
    $_POST['username'];
    $_POST['password'];
    */
?>