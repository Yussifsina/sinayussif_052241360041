<?php
$url = "localhost";
$user = "root";
$password = "";
$dbname = "try";

$conn = connect_mysqli($url,$user,$password,$dbname);

// second connection

session_start();

$conn = connect_mysqli("localhost", "root", "", "try");
?>