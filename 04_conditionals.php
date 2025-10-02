<?php

$age = 10;
// if ($age <=12){
//     echo "Muy joven para ver Harry Potter";
// } else if ($age < 15) {
//     echo "Podría ver Harry Potter con supervisión";
// } else {
//     echo "Debería ver Harry Potter solo";
// }

$watched = true;

if ($age >=15 && !$watched) {
    echo "Debería ver Harry Potter!";
}

if ($age >=15 || !$watched) {
    echo "Debería poder ir a ver Harry Potter!";
}

$day = 3;

switch ($day) {
    case 1: 
        echo "Lunes";
        break;
    case 2: 
        echo "Martes";
        break;
    case 3: 
        echo "Miercoles";
        break;
    case 4: 
        echo "Jueves";
        break;
    default: 
        echo "Día invaido"; 

}

?>