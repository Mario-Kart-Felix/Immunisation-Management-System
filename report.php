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

        h2 {
            font-family: monospace;
            font-size: 25px;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<center><h2>MY REPORT</h2></center>
<table>
    <tr>
        <th>Appointment ID</th>
        <th>Vaccination Name</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <th>Vaccination Centre</th>
        <th>Status</th>

    </tr>
    <?php
    include("include/config.php");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
    $id = $_GET['id'];
    $sql = "SELECT  aid,vname,appdate,apptime,vcentre,status from vaccination_report where pid='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr> <td>" . $row["aid"] . " </td>
                           <td>" . $row["vname"] . "</td>
                           <td>" . $row["appdate"] . "</td>
                           <td>" . $row["apptime"] . "</td>
                           <td>" . $row["vcentre"] . "</td>
                           <td>" . $row["status"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 result";
    }
    $conn->close();
    ?>
</table>

<center><p><br><br><br>
        <!--
                <a href="patient.php"><button class="button1">Back</button></a>

        -->

        <?php
        $id = $_GET['id'];

        echo "<a href=\"patient.php?id=$id\">";
        echo "<button class=\"button button1\"  >Back</button>";
        ?>

    </p></center>


</body>
</html>