<html>
<head>
    <title>pertussis</title>
    <style>

        .a {
            padding: 1%;
            color: white;
            padding-left: 35%;
            background-color: coral;
            font-size: 150%;
        }

        .b {
            padding-left: 2%;
        }

        .c {

            padding-top: 2%;
            padding: 25px;
            width: 5%;
            background-color: coral;
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
                Pertussis & Tetanus(DPT)-Booster-1 Scheduled at 16-24 Months
            </div>
        </h1>
    </centre>
</div>

<div class="b">
    <h2> Pertussis & Tetanus(DPT)-Booster-1 Scheduled at 16-24 Months</h2>
</div>
<center><img src="images/inj5.jpg"></center>
<br>
<button class="accordion">About</button>
<div class="panel">
    <p>DPT is a combined vaccine.It protects children from Diptheria,Tetanus and Pertussis.</p>
</div>
<hr>
<button class="accordion">When to give?</button>
<div class="panel">
    <p>DPT vaccine is gien at 16-24 months of age is called as DPT first booster and second injectio called as DPT 2nd
        booster,is given at 5-6 years of age.</p>
</div>
<hr>
<button class="accordion">Route and Site</button>
<div class="panel">
    <p>DPT first booster is given as intramuscular injection in anterolateral side of mid thigh in left leg.DPT second
        booster is given as intramusculaar injection in left upper arm.</p>
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