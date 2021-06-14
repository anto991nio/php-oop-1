
<?php

include "./movieClass.php";

$film1= new movie("Iron Man","Action", "English", "Jon Favreau");
$film2= new movie("Avengers: Endgame","Action", "English", "Joe Russo, Anthony Russo");

$film1->renderMovie();
$film2->renderMovie();


?>