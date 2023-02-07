<?php
$deadline = $_POST['dvalue'];

if (isset($_POST['proceed'])) {
    $deadline = $_POST['dvalue'];
    print_r($_POST['dvalue']);

    $insertdata = mysqli_query($con, "INSERT INTO orders(deadline)VALUES('$deadline");
}
