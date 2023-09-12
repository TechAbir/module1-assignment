<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
<style>
    h1{
        text-align: center;
        background-color: #528855;
    }
    h2{
        margin: 0;
        padding: 0;
        
    }
    p{
        color: teal;
        line-height: 20px;
    }
    .container{
        width: 600px;
        margin: auto;
        padding: 10px;
       
    }
</style>

</head>
<body>
<div class="container">
    <h1>My Personal Information</h1>
<?php
$name ="Mohammad Abir Hosen Bappi";
$age =34;
$country ="Bangladesh";
$bio ="Hello, I am Mohammad Abir, originally from the picturesque city of Magura in Bangladesh. Currently, I find myself amidst the bustling energy of Dhaka, the capital of our vibrant nation. With a career spanning 14 years in the dynamic field of IT, I have ventured into various roles and responsibilities, gaining a wealth of experience along the way.

My journey in the tech industry has been nothing short of exciting. From coding solutions to managing complex systems, I have honed my skills in the ever-evolving world of information technology. Presently, I've embarked on a new venture as an entrepreneur in the fashion industry, specializing in modest clothing. Simultaneously, I'm dedicating my time and expertise to crafting a cutting-edge point of sale software using C# and .NET technology. This software serves not only my business needs but also caters to the requirements of other clients.

As I continue to explore the possibilities in the tech realm, I have set my sights on mastering PHP Laravel for web application development. My relentless pursuit of knowledge and passion for innovation drive me to push the boundaries of what's possible in the world of IT. Join me on this journey as we explore the fascinating world of web development and create exciting web applications together.";

echo "<h2>Name: ".$name."</h2><br>";
echo "<h2>Age: ".$age."</h2><br>";
echo "<h2>Country: ".$country."</h2><br>";
echo "<p>Bio: ".$bio."</p><br>";



?>
</div>
</body>
</html>



