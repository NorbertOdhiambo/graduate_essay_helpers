<?php
require 'db_conn.php';

$data = json_decode(file_get_contents("php://input"));

// $ordid = $data->filename;
$file = $data->filename;

echo "$file";
