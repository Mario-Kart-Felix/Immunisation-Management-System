<!doctype html>
<html>
<head>
    <title>view</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 15px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        h3 {
            font-family: monospace;
            /*            color: #4CAF50;*/

        }

        p {
            font-family: monospace;
            font-size: 15px;
            /*            color: #4CAF50;*/

        }


        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 10px;


        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>
<body>
<?php
$id = $_GET['id'];
echo "<form action=\"h1delete.php?id=$id\" method=\"POST\">";
?>

<h3>THE FOLLOWING APPOINTMENTS ARE PENDING IN YOUR CHOSEN VACCINATION CENTRE</h3>
<table>
    <tr>
        <th>Appointment ID</th>
        <th>Patient Id</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <th>Patient Name</th>
        <th>DOB</th>
        <th>Contact Number</th>
        <th>Vaccine Name</th>
        <th>Vaccination Centre</th>

    </tr>
    <?php

    include("include/config.php");
    $id = $_GET['id'];
    if (isset($_POST['aid']))
        $a_id = $_POST['aid'];
    $res = mysqli_query($conn, "SELECT aid FROM appointment ");
    $sql = "CALL viewapp($id)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr> <td>" . $row["aid"] . " </td>
                <td>" . $row["pid"] . " </td>
                            <td>" . $row["appdate"] . " </td>
                            <td>" . $row["apptime"] . " </td>
                           <td>" . $row["Name"] . "</td>
                    
                           <td>" . $row["DOB"] . "</td>
                           
                           <td>" . $row["PhoneNumber"] . "</td>

                           <td>" . $row["vname"] . "</td>
                           <td>" . $row["vcname"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $conn->close();
    ?>
</table>
<br><br>
<center><br><br><input type="submit" value="ADMNISTERED">
    <input type="text" placeholder="Enter Appointment id" name="aid"></center>
</form>

<br><br>
<center>
    <p><strong><br>Click here to go back to doctor's page<br><br>
            <?php
            $id = $_GET['id'];
            echo "<a href=\"doctor.php?id=$id\">";
            ?>
            <button class="button1">Click here</button>
            </a></strong></p>
</center>
</body>
</html>