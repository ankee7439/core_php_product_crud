<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM `products` WHERE id=$id";

$run = mysqli_query($conn, $sql);

if($run){
    header ('Location: http://localhost/product');
}
