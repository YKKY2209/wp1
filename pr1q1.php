<?php
$username
$servername
$password
$conn=new mysqli($servername,$username,$password)
if($conn->connect_error)
{
die("connection error"$conn->connect_error);
}
else{
$sql="create database yusuf;";
if ($conn->query($sql))===True){
echo"connection sucessful";
else{
echo"error whilw creating database":
$conn_error;
}
}
$conn->close();
?>