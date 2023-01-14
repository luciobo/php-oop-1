<?php 

require_once "./classes/Movie.php";

$myMovie1 = new Movie ("Shaft", "Azione","Film d'azione" ,"Samuel L.Jeckson");
$myMovie2 = new Movie ("Caccia a Ottobre Rosso", "Azione","Film d'azione" ,"Sean Connery");

var_dump($myMovie1);
echo "<br>";
var_dump($myMovie2);
echo "<br>";
echo "<br>";

echo "Titolo Film: " . $myMovie1->getTitolo();
echo "<br>";
echo "Genere Film: " . $myMovie1->getGenere();
echo "<br>";
echo "Descizione: " . $myMovie1->getDescrizione();
echo "<br>";
echo "Attori: " . $myMovie1->getAttori();

echo "<br>";
echo "<br>";

echo "Titolo Film: " . $myMovie2->getTitolo();
echo "<br>";
echo "Genere Film: " . $myMovie2->getGenere();
echo "<br>";
echo "Descizione: " . $myMovie2->getDescrizione();
echo "<br>";
echo "Attori: " . $myMovie2->getAttori();
echo "<br>";
echo $myMovie1->infoFilm();
echo "<br>";
echo $myMovie2->infoFilm();


?>
