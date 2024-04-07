<?php
$severname = "localhost";
$username = "Leviz";
$password = "Levizz#311";
$database = "shoesland";

$connect = new mysqli($severname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "loi ket noi" . mysqli_connect_error();
    exit();
}
