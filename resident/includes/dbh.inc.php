<?php

$serverName = "localhost";
$dbUsername = "root";
$dBpassword = '';
$dBname = "barangay206";

$conn = mysqli_connect($serverName, $dbUsername , $dBpassword , $dBname );

if(!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}