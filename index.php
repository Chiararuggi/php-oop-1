<?php
require __DIR__ . '/Models/Movie.php';

 $firstMovie = new Movie("The Departed", "Il dipartimento di polizia di Boston ha deciso di sgominare il boss mafioso Frank Costello e la sua gang.", 2006);
 $secondMovie = new Movie("Il Grande Gatsby", "Un aspirante scrittore arriva a New York nel 1922 in cerca del sogno americano.", 2013);

 var_dump($firstMovie);
 echo "<br>";
 var_dump($secondMovie);
 echo "<br>";

 echo $firstMovie->getMovie();
 echo "<br>";
 echo $secondMovie->getMovie();

