<?php 
    class Car
    {
        public $Price;
        public $Speed;
        public $Fuel;
        public $Mileage;
        public $Tax;
        public function display_all()
        {
            echo "Price: " . $this->Price . " Speed: " . $this->Speed . " Fuel: " . $this->Fuel . " Mileage: " . $this->Mileage . " Tax: " . $this->Tax . "<br>";
        }
        public function __construct($Price1, $Speed1, $Fuel1, $Mileage1)
        {
            $this->Price = $Price1;
            $this->Speed = $Speed1;
            $this->Fuel = $Fuel1;
            $this->Mileage = $Mileage1;
            if($this->Price > 10000){
                $this->Tax = 0.15;
            } else {
                $this->Tax = 0.12;
            }
            $this->display_all();
        }
    }
    $Car1 = new Car(2000, 120, 20, 100000);
    $Car2 = new Car(4000, 140, 17, 9000);
    $Car3 = new Car(8000, 160, 15, 8000);
    $Car4 = new Car(10500, 160, 15, 5000);
    $Car5 = new Car(12000, 180, 14, 2000);

?>