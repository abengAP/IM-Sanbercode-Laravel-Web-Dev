<?php 

require ('animal.php');
require ('Ape.php');
require ('Frog.php');

$sheep = new Animal("shaun");

echo $sheep->get_name(). "<br>";
echo $sheep->get_legs(). "<br>";
echo $sheep->get_cold_blooded(). "<br><br>";

// echo $sheep->name. "<br>";
// echo $sheep->legs. "<br>";
// echo $sheep->cold_blooded. "<br><br>";

$sungokong = new Ape("kera sakti");
echo "nama : ". $sungokong->name. "<br>";
echo "kakinya : ". $sungokong->legs. "<br>";
echo $sungokong->yell(). "<br><br>"; 

$kodok = new Frog("buduk");

echo "nama : ". $kodok->name. "<br>";
echo "kakinya : ".$kodok->legs. "<br>";
echo $kodok->jump(); 

?>
