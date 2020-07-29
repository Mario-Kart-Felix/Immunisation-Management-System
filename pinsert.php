<?php

include("include/config.php");


$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$ph = $_POST['ph'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$uname = $_POST['uname'];
$password = $_POST['psw'];


if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT $ph from patient where ContactNumber = ? Limit 1";
    $INSERT = "INSERT into patient(Name,Gender,DOB,Address,ContactNumber,EmailAddress,Height,Weight,username,password) values(?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $ph);
    $stmt->execute();
    $stmt->bind_result($ph);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        if (stmt) {
            $stmt->bind_param("ssssssiiss", $fullname, $gender, $dob, $add, $ph, $email, $height, $weight, $uname, $password);
            $stmt->execute();

            header("Location:prs.php");
        } else {
            die(mysqli_error());    // Thanks to Pekka for pointing this out.
        }
    } else {
        echo "someone already registered";
    }
    $stmt->close();
    $conn->close();
}
?>