<?php



$host = "localhost:3306";

$user = "graduate_essay";

$password = "p@ssword2022";

$dbname = "graduate_essay";


$errors = array();





$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check connection

// define('USER', 'root');
// define('PASSWORD', '');
// define('HOST', 'localhost:3307');
// define('DATABASE', 'essay_helpers');
// try {
//     $connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);
// } catch (PDOException $e) {
//     exit("Error: " . $e->getMessage());
// }