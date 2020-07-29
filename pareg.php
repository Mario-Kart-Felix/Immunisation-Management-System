<html>
<style>


    .body {
        background-color: bisque;

    }

    /* Bordered form */
    form {
        border: 5px solid #f1f1f1;
        width: 45%;
        padding: 10px;
        padding-top: 250px;
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
        width: 10%;

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

    /* The message box is shown when the user clicks on the password field */
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 15px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
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
    <p> To go back to main page<br><br><a href="index.php">
            <button class="button1">Click here</button>
        </a></p>


    <p>Already registered??<br>Then click below to login to your account<br><br><a href="ploginpage.php">
            <button class="button1">Login</button>
        </a></p>

</div>

<div id='id'>

    <form action="pinsert.php" method="post">
        <h1><b>New Patient Registration</b></h1>
        <p>Please fill in the form below</p>
        <!--
          <div class="container">
              <label for="pid"><b>Patient id</b></label><br><br>
            <input type="text" placeholder="Patient id" name="pid" required>

        -->


        <label for="name"><b>Full Name</b></label><br><br>
        <input type="text" pattern="[a-zA-Z ]+" title="No special symbols or numbers allowed." placeholder="First Name"
               name="fullname" required>

        <br><br>

        <label for="gender"><b>Gender</b></label><br><br>

        <input type="text" placeholder="Male or female" pattern="male|Male|Female|female" name="gender" required>
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

        <label for="ph"><b>Contact Number</b></label>
        <input type="text" placeholder="Enter Phone number" name="ph" pattern="[6-9]{1}[0-9]{9}"
               title="The input must begin with 6,7,8,9 and the length of the phone number should be 10 digits."
               required>

        <label for="email"><b>E-mail Address</b></label>
        <input type="text" placeholder="Please enter your e-mail address" name="email" required>
        <br><br>

        <label for="height"><b>Height</b></label>
        <input type="number" placeholder="Please enter your height" pattern="[0-9]" name="height" required>

        <label for="height"><b>Weight</b></label>
        <input type="number" placeholder="Please enter your weight" pattern="[0-9]" name="weight" required>
        <br><br>


        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" pattern="[a-zA-Z0-9]" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
               required>


        <button type="submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
        <br>
</div>

<div class="container" style="background-color:#f1f1f1">
</div>
<div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

</form>


<script>

    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
    };

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
    };

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    };


    function validateForm() {
        var x = document.getElementById('id01');
        if (x == "") {
            alert("Please enter the data");
            return false;
        } else {
            alert("Registration Successfull!!!");
            return false;
        }

    }

</script>
</div>


</body>
</html>