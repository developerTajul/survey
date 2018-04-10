<?php 


$con = new mysqli('localhost', 'root', '', 'collegemouse');

if ( $con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 