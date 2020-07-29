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
<table>
    <tr>
        <th>Doctor ID</th>
        <th>Doctor Name</th>
        <th>Qualification</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Email Address</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Vaccination Centre</th>

    </tr>
    <?php
    include("include/config.php");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
    $id = $_GET['id'];
    $sql = "SELECT  Doctor_id,DoctorName,Qualification,Gender,PhoneNumber,EmailAddress,DOB,Address,vcentre FROM doctor where Doctor_id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr> <td>" . $row["Doctor_id"] . " </td>
                           <td>" . $row["DoctorName"] . "</td>
                           <td>" . $row["Qualification"] . "</td>
                           <td>" . $row["Gender"] . "</td>
                           <td>" . $row["PhoneNumber"] . "</td>
                           <td>" . $row["EmailAddress"] . "</td>
                           <td>" . $row["DOB"] . "</td>
                           <td>" . $row["Address"] . "</td><td>" . $row["vcentre"] . "</td>
                           <td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }

    $conn->close();
    ?>
</table>
<center><p><br><br>
        <?php
        $id = $_GET['id'];

        echo "<a href=\"doctor.php?id=$id\">";
        echo "<button class=\"button button1\"  >Back</button>";
        ?>
    </p></center>


</body>
</html>