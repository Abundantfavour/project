<?php
function dbConnect() {
    $server = "localhost";
    $host = "root";
    $dbName = "warehouse";
    $password = "";
    $con = mysqli_connect($server, $host, $password, $dbName);

    return $con;
}