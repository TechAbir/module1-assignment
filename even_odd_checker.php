<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style>
        .input{
            font-size: 2rem;
            margin: 5px;
        }
        body{
            font-size: 20px;
        }
        .container{
            margin: auto;
            width: 800px;
            background-color: lightgreen;
            text-align: center;
        }
        .btn-convert{
            background-color: pink;
            text-align: center;
            font-size: 2rem;
            margin: 5px;

        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Even or Odd Checker</h2>
        <form method="post" action="">
        <input class="input" type="number" name="number" placeholder="Enter a number" require><br>
        <!--
        <select class="input" name="operation" id="operation">
            <option value="CelToFahr">Celsius to Fahrenheit</option>
            <option value="FahrToCel">Fahrenheit to Celsius</option>
        </select><br>
     -->

        <button class="btn-convert">Check</button>
        </form>
    <div id="result">

    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
           
            //$operation = $_POST["operation"];

            if($number%2==0){
                echo "Your number is even";
            }
            else{
                echo "Your number is odd";
            }
        }
    ?>
    
    </div>
    
</body>
</html>