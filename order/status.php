<?php
include "../admin/conn.php";
include "../admin/auth.php";

$user_id = $_SESSION['id'];

// $qry = mysqli_query($con, "SELECT * FROM orders WHERE user_id='" . $user_id . "'");
// $row = mysqli_fetch_array($qry);

$p = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='pending' AND user_id='" . $user_id . "'");
$a = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='assigned' AND user_id='" . $user_id . "'");
$e = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='editing' AND user_id='" . $user_id . "'");
$c = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='completed' AND user_id='" . $user_id . "'");
$r = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='revision' AND user_id='" . $user_id . "'");
$d = mysqli_query($con, "SELECT COUNT(*) FROM orders WHERE order_status='delivered' AND user_id='" . $user_id . "'");
$pen = mysqli_fetch_array($p);
$as = mysqli_fetch_array($a);
$ed = mysqli_fetch_array($e);
$com = mysqli_fetch_array($c);
$rev = mysqli_fetch_array($r);
$del = mysqli_fetch_array($d);

?>

<div class="row">

        <div class="col"><a href="./../status/pending.php"> Pending
                        (<?php echo $pen[0] ?>)</a></div>
        <div class="col"> <a href="./../status/assigned.php"> Assigned
                        (<?php echo $as[0] ?>)</a> </div>
        <div class="col"><a href="./../status/editing.php"> Editing (<?php echo $ed[0] ?>)
                </a></div>
        <div class="col"><a href="./../status/completed.php"> Completed
                        (<?php echo $com[0] ?>) </a></div>
        <div class="col"> <a href="./../status/revision.php"> revision (<?php echo $rev[0] ?>)
                </a></div>
        <div class="col"><a href="./../status/delivered.php"> Delivered
                        (<?php echo $del[0] ?>)</a></div>
</div>