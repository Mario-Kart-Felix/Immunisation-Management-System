<?php
include("include/config.php");

$usernm = $_POST['uname'];
$passwd = $_POST['psw'];


if (!empty($usernm) || !empty($passwd)) {
    $sql = "select * from doctor where username='" . $usernm . "' and password='" . $passwd . "'limit 1 ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['username'] == $usernm && $row['password'] == $passwd) {
        $id = $row['Doctor_id'];
        header("Location:doctor.php?id=$id");
    } else {
        echo "invalid";
    }
} else {
    echo "invalid";
}
?>
