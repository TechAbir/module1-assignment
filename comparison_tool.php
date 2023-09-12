<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        h2{
            text-transform: uppercase;
        }
        body {

            background-color: #ccccff;
            margin: 100px auto;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #8080ff;
            display: inline-block;
        }

        label {
            font-weight: bold;
            font-size: 18px;
            margin: 22px 0 !;
        }

        input[ type="number"] {
            width: 80%;
            padding: 10px;
            font-size: 22px;
            margin: 15px 0;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 6px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 3px;
            background-color: rgba(255, 0, 0, 0.178);

        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h2>Comparison Tool</h2>
    <form action="" method="post">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" placeholder="Enter number 1" required><br>

        <label for="number2">Number 2: </label>
        <input type="number" name="number2" placeholder="Enter number 2" required><br>

        

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        

        // Larger Number calculate

        $largerNumber  = $number1 > $number2 ? $number1 : ($number2 > $number1 ? $number2 : "Numbers are equal");
             

        if($number1!=$number2){
            echo "<p>Larger Number: $largerNumber</p>";
        }
        else{
            echo "<p>Result: $largerNumber</p>";
        }

        
        

    }
    ?>


</body>

</html>