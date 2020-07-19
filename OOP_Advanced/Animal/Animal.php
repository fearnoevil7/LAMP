<?php
    class Animal
    {
        public $Name;
        public $Health;
        public function __construct($nombre)
        {
            $this->Name = $nombre;
            $this->Health = 100;
        }
        public function walk()
        {
            echo "Walking!!!!!!!";
            $this->Health -= 1;
            return $this;
        }
        public function run()
        {
            echo "Running!!!!!!!!";
            $this->Health -= 5;
            return $this;
        }
        public function displayHealth()
        {
            echo "Name: " . $this->Name . ", Health: " . $this->Health . "<br>";
        }
    }
    $NuevoAnimal = new Animal("Animal");
    echo $NuevoAnimal->walk()->walk()->walk()->run()->run()->displayHealth();
?>