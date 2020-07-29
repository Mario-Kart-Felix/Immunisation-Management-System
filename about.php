<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: beige;
        }

        .flip-card {
            background-color: transparent;
            width: 400px;
            height: 400px;
            perspective: 1000px;
            margin-top: 80%;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        .flip-card-back {
            background-color: burlywood;
            color: black;
            transform: rotateY(180deg);

        }


        .txt {

            text-align: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
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
            margin-left: 15%;
        }

    </style>
</head>
<body>
<div class="a">
    <center>
        <h1>TracVax</h1>
        <h3>Track your records!!!!</h3>
    </center>
</div>
<br><br>
<div class="txt">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/inj3.jpg" alt="Avatar" style="width:400px;height:400px;">
            </div>
            <div class="flip-card-back">
                <h1>TracVax</h1>
                <p>TracVax is an immunisation or vaccination maagement system...</p>
                <p></p>
            </div>
        </div>
        <br><br><br><br>
    </div>

</div>
<div class="b">
    <p> To go back to main page<br><br><a href="index.php">
            <button class="button button1">Click here</button>
        </a></p>
</div>

</body>
</html>
