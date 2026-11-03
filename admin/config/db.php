<?php 
$hostname="localhost";
$rootname="root";
$password="";
$db_name="myjustdial";
$conn=mysqli_Connect($hostname,$rootname,$password,$db_name);
if(!$conn){
    die("database connection was failed due to ".mysqli_connect_error());
}

?>