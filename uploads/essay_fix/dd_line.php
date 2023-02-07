<?php

$dealine = $_POST['data'];

$qry = "INSERT INTO orders(deadline) VALUES('$deadline')";

$sql_qry = mysqli_query($con, $qry);
