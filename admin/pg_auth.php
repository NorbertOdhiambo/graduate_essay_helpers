<?php
// session_start();
if ($_SESSION['id'] == '') {
    header('location: https://graduate-essay-helpers.com/order.php');
}
// $_SESSION['id'] = '';

$id = $_SESSION['id'];
