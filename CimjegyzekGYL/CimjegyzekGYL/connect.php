<?php
$servername="localhost";
$username="root";
$password="";
$database="cimjegyadatbazis";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
    die("Csatlakozás sikertelen!".$conn->connect_error);
}else{
    echo 'Sikeres csatlakozás';
}
$conn->set_charset("utf-8");
?>