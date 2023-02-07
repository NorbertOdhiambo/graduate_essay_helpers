<?php

session_start();

unset($_SESSION["id"]);
session_destroy();

header("Location: https://graduate-essay-helpers.com/order.php");
// header("Location: ./login.php");
