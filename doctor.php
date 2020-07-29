<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
            background: url(images/im.jpeg) no-repeat center;
            background-size: cover;
            height: 800px;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        p {
            font-family: monospace;
            color: white;
            font-size: 18px;
        }


        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }

        .button4 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

        .button4:hover {
            background-color: chartreuse;
        }

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .button5:hover {
            background-color: #555555;
            color: white;
        }
    </style>
</head>
<body>

<div class="hero-image">
    <div class="hero-text">

        <h1 style="font-size: 80px">Doctor</h1>
        <h1 style="font-size:60px">TracVax</h1>
        <?php
        $id = $_GET['id'];

        echo "<a href=\"dview.php?id=$id\">";
        echo "<button class=\"button button1\"  >Details</button>";
        ?>
        </a>
        <?php
        $id = $_GET['id'];
        echo "<a href=\"appview.php?id=$id\">";
        echo "<button class=\"button button2\"  >Appointments</button>";
        ?>
        </a>
        <?php
        $id = $_GET['id'];
        echo "<a href=\"vcentre.php?id=$id\">";
        echo "<button class=\"button button5\"  >Add Vaccination Centre</button>";
        ?>
        </a>
        <br><br><br><br>
    </div>
    <br>
    <center>
        <p> To go back to main page<br>
            <a href="index.php">
                <button class="button button3">Logout</button>
            </a></p>
    </center>
</div>


</body>
</html>
