<?php

$host = "localhost:3307";

$user = "root";

$password = "";

$dbname = "essay_helpers";


$errors = array();


$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
