<?php
include_once('include/config.php');
$id = $_GET['id'];
if (isset($_POST['aid'])) {
    $a_id = $_POST['aid'];
    $sql = "DELETE FROM appointment WHERE aid='$a_id'";
    $UPDATE = "UPDATE vaccination_report SET status='Done' where aid='$a_id'";

    $res = mysqli_query($conn, $sql) or die("Failed" . mysqli_error());

    $res = mysqli_query($conn, $UPDATE) or die("Failed" . mysqli_error());

    echo "<meta http-equiv='refresh' content='0;url=appview.php?id=$id'>";
}
?>