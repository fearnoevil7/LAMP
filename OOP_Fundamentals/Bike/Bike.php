<?php 
    class Bike
    {
        public $Price;
        public $Max_Speed;
        public $Miles;
        public function __construct($Price1, $Max_Speed1)
        {
            $this->Price = $Price1;
            $this->Max_Speed = $Max_Speed1;
            $this->Miles = 0;
        }
        public function display_info()
        {
            echo "Price: " . $this->Price . " Max Speed: " . $this->Max_Speed . " Miles: " . $this->Miles . "<br>";
        }
        public function drive()
        {
            echo "Driving!!!!!!!!";
            $this->Miles += 10;
            return $this;
        }
        public function reverse()
        {
            echo "Reversing!!!!!!";
            $this->Miles -= 5;
            return $this;
        }
    }
    $Bike1 = new Bike(75, 16);
    $Bike2 = new Bike(100, 25);
    $Bike3 = new Bike(106, 27);
    echo $Bike1->drive()->drive()->drive()->reverse()->display_info();
    echo $Bike2->drive()->drive()->reverse()->reverse()->display_info();
    echo $Bike3->reverse()->reverse()->reverse()->display_info();
?>