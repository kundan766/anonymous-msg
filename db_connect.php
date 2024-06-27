<?php
$servername="localhost";
$username="root";
$password="";
$database="chatroom";

//creating connection to the database 

$conn=mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

?>