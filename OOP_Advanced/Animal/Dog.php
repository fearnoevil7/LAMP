<?php
    require('Animal.php');
    class Dog extends Animal
    {
        public function __construct($nombre)
        {
            $this->Name = $nombre;
            $this->Health = 150;
        }
        public function pet()
        {
            echo "<br>" . $this->Name . " is being petted!<br>";
            $this->Health += 5;
            return $this;
        }
    }
    $Clifford = new Dog("Clifford");
    echo $Clifford->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
?>