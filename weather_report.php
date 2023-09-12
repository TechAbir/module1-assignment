<?php

$temperature =10;

if($temperature <=14){
    echo "Temperature Now #$temperature&deg;C. It's freezing!";

} elseif($temperature >14 & $temperature <= 25){
    echo "Temperature Now #$temperature&deg;C. It's cool!";
}
else{
    echo "Temperature Now #$temperature&deg;C. It's warm!";
}



?>