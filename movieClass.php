<?php

class movie{
  public $title;
  public $genre;
  public $language;
  public $filmDirector ;
 

  function __construct($title,$genre,$language,$filmDirector ) {
    $this->title = $title;
    $this->genre = $genre;
    $this->language = $language;
    $this->filmDirector = $filmDirector;
  }

  
  

  public function renderMovie() {
    echo "<h1>" . $this->title . "</h1>";
    echo "<h2>" . $this->genre .  "</h2>";
    echo "<p>Lingua:" . $this->language .  "</p>";
    echo "<p>Regista:" . $this->filmDirector .  "</p>";

  }
}

?>