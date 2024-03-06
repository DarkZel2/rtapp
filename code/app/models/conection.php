<?php

function connection() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "rtapp";

    $connect = mysqli_connect($host, $user, $password);
    mysqli_select_db($connect, $db);
    return $connect;
}