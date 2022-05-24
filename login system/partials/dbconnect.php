<?php

$servername="localhost";
$username="root";
$password="";
$database="priya";


$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){

	die("Error". mysql_connect_error());
}
?>