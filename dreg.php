<!DOCTYPE html>
<html>
<style>


    html {
        scroll-behavior: smooth;
    }


    div.a {
        text-align: center;
        font-weight: 100;
        font-size: 40px;
        font-style: normal;
        font-feature-settings: normal;
        color: green;
        font-variant-alternates: normal;

    }

    bg {
        background-color: beige;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }


    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for all buttons */
    button {
        align-self: center;
        text-align: center;
        font-size-adjust: auto;
        font-size: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px 100px;
        margin: 20px 8px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 5px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }


    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }


    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }


</style>
<body>
<br>
<div class="a">
    <h2><b><i>Doctor Registration </i></b></h2>
</div>

<div class="w3-container">

    <img src="images/patient.jpg" class="w3-circle" alt="Norway" style="width:300" height="300" class="center">
</div>
<br>

<center>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" align="center">Sign Up
    </button>
</center>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
    <form class="modal-content" action="connect.php" onsubmit="return validateForm()" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <strong>Name:</strong> <br>
            <input id="first" type="text" placeholder="First">
            <input id="middle" type="text" placeholder="Middle">
            <input id="last" type="text" placeholder="Last"><br><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>


            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="country" name="country" required>


            <input type="text" placeholder="Street" name="email" required>

            <input type="text" placeholder="State" name="email" required>


            <input type="text" placeholder="City" name="email" required>

            <br>
            <strong>Other Information</strong> <br>
            <label for="dob"><b>Date of Birth</b></label>
            <input type="text" placeholder="dob" name="dob" required>

            <strong>Gender:</strong> <br>
            <input type="radio" name="gender" checked>Male
            <input type="radio" name="gender">Female
            <input type="radio" name="gender">Other <br><br>


            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
                <button type="submit" class="signupbtn">Sign Up</button>

            </div>
        </div>


    </form>
</div>


<script>
    function validateForm() {
        var x = document.getElementById('id01');
        if (x == "") {
            alert("Please enter the data");
            return false;
        } else {
            alert("Registration Successfull!! Please go back to main menu to login");
            return false;
        }

    }


</script>

</body>
</html>




