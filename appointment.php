<html>
<style>


    .body {
        background-color: bisque;

    }

    /* Bordered form */
    form {
        border: 5px solid #f1f1f1;
        width: 30%;
        padding: 10px;
        padding-top: 300px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);

    }

    /* Full-width inputs */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 15px 10px;
        margin: 15px 0;
        border: none;
        cursor: pointer;
        width: 20%;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .a {
        font-size: 20px;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        padding: 25px;


    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    .b {
        color: black;
        margin-left: 5%;
        left: 0;
    }


</style>
<body>

<div class="a">
    <left>
        <h1>TracVax</h1>
        <h3>Track your records!!!!</h3>
    </left>
</div>
<div class="b">
    To go back to main page<br><br><a href="patient.php">
        <button class="button1">Click here</button>
    </a>
</div>

<div id='id'>

    <form action="appinsert.php" method="post">
        <h1><b>Book your Appointments!!</b></h1>
        <div class="container">


            <!--

                   <label for="aid"><b>Appointment Id</b></label>
                <input type="text" placeholder="Please enter your identification number" name="aid" required>
            -->

            <label for="pid"><b>Patient Id</b></label>
            <input type="text" placeholder="Please enter your identification number" name="pid" required>


            <label for="appdate"><b>Appointment Date</b></label>
            <input type="date" placeholder="Enter date" name="appdate" required><br><br>

            <label for="apptime"><b>Appointment time</b></label>
            <input type="time" placeholder="Enter time" name="apptime" required><br><br>

            <label for="fname"><b>Full Name</b></label>
            <input type="text" placeholder="Please enter your full name" name="fname" required>


            <label for="gender"><b>Gender</b></label><br><br>

            <input type="text" placeholder="Male or female" name="gender" required>
            <br>

            <br>

            <label for="date"><b>DOB</b></label>
            <br>
            <br>
            <input type="date" placeholder="Enter DOB" name="dob" required>
            <br>
            <br>


            <label for="add"><b>Address</b></label>
            <input type="text" placeholder="Please enter your address" name="add" required><br>

            <label for="ph"><b>Phone number</b></label>
            <input type="text" placeholder="Enter Phone number" name="ph" required>
            <label for="email"><b>E-mail Address</b></label>
            <input type="text" placeholder="Please enter your e-mail address" name="email" requuired>

            <br><br>


            <label for="vacc"><b>Please select the vaccine:</b></label>
            <select name="vaccines">
                <option value="BCG">BCG</option>
                <option value="OPV">Oral Polo Vaccine(OPV)</option>
                <option value="Hepatitis B">Hepatitis B</option>

                <option value="OPV-2">Oral Polo Vaccine(OPV)-2</option>
                <option value="fIPV-1*">fIPV-1*</option>
                <option value="Pentavalent-1">Pentavalent-1</option>
                <option value="OPV-3">Oral Polo Vaccine(OPV)-3</option>
                <option value="fIPV-2*">fIPV-2*</option>
                <option value="Pentavalent-2">Pentavalent-2</option>
                <option value="Pentavalent-3">Pentavalent-3</option>
                <option value="DPT-Booster-1">Pertussis and Tetanus(DPT)-Booster-1</option>
                <option value="OPV-Booster">OPV-Booster</option>
                <option value="DPT-Booster-2">DPT-Booster-2</option>
                <option value="TT">TT</option>

            </select>


            <br><br>


            <!--
                        <label for="vc"><b>Vaccination Centre</b></label>
                        <select name="vcentre">
                            <option value="Jayanagar">Jayanagar</option>
                            <option value="Nagasandra">Nagasandra</option>
                            <option value="Yelachenahalli">Yelachenahalli</option>
                            <option value="Mysore Road">Mysore Road</option>
                            <option value="Rajajinagar">Rajajinagar</option>
                            <option value="Malleshwaram">Malleshwaram</option>
                            <option value="M G Road">M G Road</option>
                            <option value="Majestic">Majestic</option>
                            <option value="Koramangala">Koramangala</option>
                        </select>

            -->
            <label for="vc"><b>Vaccination Centre</b></label>
            <select name="vcentre">
                <?php
                include("include/config.php");
                if ($conn->connect_error) {
                    die("Connection Failed:" . $conn->connect_error);
                }
                $sql = "SELECT  vc_name from vaccination_centre";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['vc_name'] . '">' . $row['vc_name'] . '</option>';
                    }
                    echo "</select>";
                } else {
                    echo "0 result";
                }
                $conn->close();
                ?>


                <br><br>


                <button type="submit">Submit</button>

                <button type="reset" value="Reset">Reset</button>
                <br>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        </div>


    </form>


    <script>
        function validateForm() {
            var x = document.getElementById('id01');
            if (x == "") {
                alert("Please enter the data");
                return false;
            } else {
                alert("Your appointment has been successfully registered!!!");
                return false;
            }

        }

    </script>
</div>


</body>
</html>