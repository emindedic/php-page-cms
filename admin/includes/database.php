<?php
$host = "localhost";
$user = "root";
$password ="root";
$database = "mycms";

try{
    $connect = mysqli_connect($host, $user, $password, $database);

} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}


?>