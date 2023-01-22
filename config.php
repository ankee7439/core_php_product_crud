<?php
$dbhost= "localhost";
$dbuser="root";
$dbpass="";
$db="test";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db) ;
if(!$conn){
    echo "not connected";
}
