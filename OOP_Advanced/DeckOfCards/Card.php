<?php
    class Card
    {
        public $Suit;
        public $StringValue;
        public $NumericalValue;
        public function __construct($suit1, $stringValue1, $numericalValue1)
        {
            $this->Suit = $suit1;
            $this->StringValue = $stringValue1;
            $this->NumericalValue = $numericalValue1;
        }
        public function showCard()
        {
            echo "Suite: " . $this->Suit . ", String Value: " . $this->StringValue . ", Numerical Value: " . $this->NumericalValue;
        }
    }
?>