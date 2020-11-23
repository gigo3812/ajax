<?php
session_start();
if (!empty($_SESSION["name"]))
    if ($_SESSION["name"] != "gigo") {
        header('Location: localhost:8080');
    } else {
        test_info();
    }
else
    header('Location: localhost:8080');







function test_info()
{
    extract($_POST);
    // Create connection
    $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    // Check connection

    $sql = $conn->prepare("insert into user(name,family,tel) value( ? , ?,?)");
    $sql->bindparam(1, $name,PDO::PARAM_STR);
    $sql->bindparam(2, $family,PDO::PARAM_STR);
    $sql->bindparam(3, $tel);
    $sql->execute();
}
