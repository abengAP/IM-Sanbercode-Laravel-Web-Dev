<?php 

require ('animal.php');
require ('Ape.php');
require ('Frog.php');

$sheep = new Animal("shaun");

echo "Name : ".$sheep->get_name(). "<br>";
echo "Legs : ".$sheep->get_legs(). "<br>";
echo "Cold Blooded : ".$sheep->get_cold_blooded(). "<br><br>";

// echo $sheep->name. "<br>";
// echo $sheep->legs. "<br>";
// echo $sheep->cold_blooded. "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : ". $sungokong->name. "<br>";
echo "Legs : ". $sungokong->legs. "<br>";
echo "Cold Blooded : ". $sungokong->cold_blooded. "<br>"; 
echo "yell : ";
echo $sungokong->yell(). "<br><br>";

$kodok = new Frog("buduk");

echo "nama : ". $kodok->name. "<br>";
echo "kakinya : ".$kodok->legs. "<br>";
echo "Cold Blooded : ". $kodok->cold_blooded. "<br>"; 
echo "jump : ";
echo $kodok->jump(). "<br><br>";

?>
