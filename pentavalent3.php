<html>
<head>
    <title>Pentavalent-3</title>
    <style>

        .a {
            padding: 1%;
            color: white;
            padding-left: 35%;
            background-color: cornflowerblue;
            font-size: 150%;
        }

        .b {
            padding-left: 2%;
        }

        .c {

            padding-top: 2%;
            padding: 25px;
            width: 5%;
            background-color: cornflowerblue;
            color: white;

        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 30px;
            font-size: 20px;


        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* Style the buttons that are used to open and close the accordion panel */
        .accordion {
            background-color: bisque;
            color: #444;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            font-size: 125%;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
            background-color: bisque;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 0 18px;
            background-color: white;
            display: none;
            overflow: hidden;
        }


    </style>
</head>
<body>

<div class="a">
    <centre>
        <h1>
            <div class="back">

                <a style="text-decoration: none;" href="mychart.php">&larr;</a>
                Pentavalent-3 Scheduled At 9-12 Weeks
            </div>
        </h1>
    </centre>
</div>
<div class="b">
    <h2>Pentavalent-3 Scheduled At 9-12 Weeks</h2>
</div>
<center><img src="images/inj5.jpg"></center>
<br>
<button class="accordion">About</button>
<div class="panel">
    <p>Pentavalent Vaccine is a combined vaccine to protect children from five diseases namely
        Ditheria,Tetanus,Pertusis,Haemophilis Influenza type b infection and Hepatitis B. </p>
</div>
<hr>
<button class="accordion">When to give?</button>
<div class="panel">
    <p>Three doses are given at 6,10 and 14 weeks of age.</p>
</div>
<hr>
<button class="accordion">Route and Site</button>
<div class="panel">
    <p>Pentavalent vaccine is given intramuscularly on anterolateral side of mid thigh of left leg.</p>
</div>
<hr>
<center>
    <p><br><br><br><a href="appointment.php">
            <button class="button1">Book Appointment</button>
        </a></p>
</center>
<script>


    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>