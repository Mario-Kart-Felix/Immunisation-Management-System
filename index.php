<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: bisque;
        }

        .img {
            background: url(images/im.jpeg) no-repeat center;
            background-size: cover;
            height: 800px;
            position: relative;
        }

        .txt {
            text-align: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;

            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 20px;

        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            margin-left: 20px;
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
            padding: 50px;
        }

        .button4:hover {
            background-color: chartreuse;
        }

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
            padding: 50px;

        }

        .button5:hover {
            background-color: #555555;
            color: white;
        }

        .button6 {
            background-color: white;
            color: black;
            border: 2px solid blue;
        }

        .button6:hover {
            background-color: blue;
            color: white;
        }


        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            image-orientation: center;
            margin-top: 5%;
        }

        /* Caption text */
        .txt {
            color: black;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            margin-top: 5px;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3s;
            animation-name: fade;
            animation-duration: 3s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }


    </style>
</head>
<body>


<div class="slideshow-container">


    <div class="mySlides fade">

        <img src="images/a.jpg" style="width:100%">

    </div>

    <div class="mySlides fade">

        <img src="images/images%20(3).jpeg" style="width:100%">

    </div>

    <div class="mySlides fade">

        <img src="images/images%20(3).jpeg" style="width:100%">

    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>


<div class="txt">


    <h1 style="font-size:60px">TracVax</h1>
    <h2>Track your records!!!!</h2>
    <br><br><br>
    <br><br><br>
    <a href="docreg.php">
        <button class="button button2">Doctor Registration</button>
    </a>
    <a href="pareg.php">
        <button class="button button2">Patient Registration</button>
    </a>
    <a href="dloginpage.php">
        <button class="button button2">Doctor Login</button>
    </a>
    <a href="ploginpage.php">
        <button class="button button2">Patient Login</button>
    </a>
    <br>
    <a href="about.php">
        <button class="button button1">About Us</button>
    </a>


</div>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

</body>
</html> 


































