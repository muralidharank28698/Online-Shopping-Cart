<?php
$servername="localhost";
$username="root";
$password="8098633412Root";
$db="ShopingCart";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error) 
{
    echo $conn->connect_error;
    die("sorry Database not connecter");
}
// else
// {
// echo "database connected";
// }
?>