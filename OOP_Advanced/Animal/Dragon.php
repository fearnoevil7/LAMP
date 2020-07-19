<?php
    require('Animal.php');
    class Dragon extends Animal
    {
        public function __construct($nombre)
        {
            $this->Name = $nombre;
            $this->Health = 170;
        }
        public function fly()
        {
            echo "<br>" . $this->Name . " is flying!!!!!!!";
            $this->Health -= 10;
            return $this;
        }
        public function displayHealth()
        {
            echo "<br>This is a dragon!<br>";
            parent::displayHealth();
        }
    }
    $Fiona = new Dragon("Fiona");
    echo $Fiona->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
?>