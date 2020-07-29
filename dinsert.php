<?php

include("include/config.php");

$fullname = $_POST['fullname'];
$qualification = $_POST['qualification'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$ph = $_POST['ph'];
$email = $_POST['email'];
$vcentre = $_POST['vcentre'];
$uname = $_POST['uname'];
$password = $_POST['psw'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT $ph from doctor where PhoneNumber = ? Limit 1";
    $INSERT = "INSERT into doctor(DoctorName,Qualification,Gender,PhoneNumber,EmailAddress,DOB,Address,vcentre,username,password) values(?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $ph);
    $stmt->execute();
    $stmt->bind_result($ph);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum == 0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        if ($stmt) {
            $stmt->bind_param("ssssssssss", $fullname, $qualification, $gender, $ph, $email, $dob, $add, $svcentre, $uname, $password);
            $stmt->execute();
            header("Location:drs.php");
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