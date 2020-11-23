<?php

if(!empty($_POST))
login();

function login()
{

    session_start();

    $_SESSION["name"] = "gigo";
    header('location: index.php');

}
?>