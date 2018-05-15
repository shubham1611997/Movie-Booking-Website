<?php
$username="root";
$server="localhost";
$password="";
$dbname="project";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
die("Could not connect to server");

?> 