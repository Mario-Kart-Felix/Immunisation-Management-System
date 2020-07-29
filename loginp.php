<?php
include("include/config.php");

$usernm = $_POST['uname'];
$passwd = $_POST['psw'];


if (!empty($usernm) || !empty($passwd)) {
    $sql = "select * from patient where username='" . $usernm . "' and password='" . $passwd . "'limit 1 ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['username'] == $usernm && $row['password'] == $passwd) {
        $id = $row['Patient_id'];
        header("Location:patient.php?id=$id");

    } else {
        echo "invalid";
    }
} else {
    echo "inavalid";
}
?>
