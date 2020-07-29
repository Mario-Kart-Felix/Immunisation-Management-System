<?php
include("include/config.php");

$pid = $_POST['pid'];
$appdate = $_POST['appdate'];
$apptime = $_POST['apptime'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$ph = $_POST['ph'];
$vaccines = $_POST['vaccines'];
$vcentre = $_POST['vcentre'];

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT Patient_id from patient where Patient_id = ? Limit 1";
    $INSERT = "INSERT into appointment(pid,appdate,apptime,Name,DOB,PhoneNumber,vname,vcname) values(?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("i", $pid);
    $stmt->execute();
    $stmt->bind_result($pid);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    if ($rnum != 0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        if ($stmt) {
            $stmt->bind_param("isssssss", $pid, $appdate, $apptime, $fname, $dob, $ph, $vaccines, $vcentre);
            $stmt->execute();
            echo "Appointment booked successfully.";
            header("refresh:3; url=appointment.php");
        } else {
            die(mysqli_error());//Thanks to pekka for pointing this out.
        }
    } else {
        echo "Patient ID not found";
    }
    $stmt->close();
    $conn->close();
}
?>