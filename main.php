<?php

include_once "./cancion.php";
include_once "./mi_playlist.php";
include_once "./genero.php";



$cancion1 = new cancion("With or without you", "U2", 4, 12, Genero::rock);
$cancion2 = new cancion("Gimme Shelter", "Rolling Stones", 3, 30, genero::rock);
$cancion3 = new cancion("Beast of Burden", "Rolling Stones", 5, 37, genero::rock);
$cancion4 = new cancion("Bad Liar", "Imagine Dragons", 4, 22, genero::pop);
$cancion5 = new cancion("My Universe", "Colplay", 3, 46, genero::pop);
$cancion6 = new cancion("Don't you worry child", "Swedish House Mafia", 3, 39, genero::electro);
$cancion7 = new cancion("Papers Plane", "MIA", 3, 26, genero::pop);
$cancion8 = new cancion("Comfortably Numb", "Pink Floyd", 7, 13, genero::rock);
$cancion9 = new cancion("Sky and Sand", "Paul Kalkbrenner", 8, 53, genero::electro);
$cancion10 = new cancion("God's Plan", "Drake", 5, 57, genero::rap);

$lista1 = new mi_playlist();
$lista2 = new mi_playlist();

$lista1 -> registrar_canciones($cancion1);
$lista1 -> registrar_canciones($cancion2);
$lista1 -> registrar_canciones($cancion3);
$lista1 -> registrar_canciones($cancion4);
$lista1 -> registrar_canciones($cancion5);
$lista1 -> registrar_canciones($cancion6);
$lista1 -> registrar_canciones($cancion7);
$lista1 -> registrar_canciones($cancion8);
$lista1 -> registrar_canciones($cancion9);
$lista1 -> registrar_canciones($cancion10);


echo $lista1->mostrar_cancion_larga();
echo "<br>";

$lista1->buscar_canciones_autor("MIA");
echo "<br>";


echo $lista1->busqueda_por_genero("pop");
echo "<br>";
echo $lista1->busqueda_por_genero("rock");
echo "<br>";
echo $lista1->busqueda_por_genero("rap");
echo "<br>";
echo $lista1->busqueda_por_genero("electro");
echo "<br>";



//var_dump($lista1);

//$lista2->buscar_cancion_larga();
//$lista2->busqueda_por_genero("rap")










?>