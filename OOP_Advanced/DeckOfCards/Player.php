<?php
    require('Deck.php');
    class Player
    {
        public $Name;
        public $Hand;
        public function __construct($Nombre)
        {
            $this->Name = $Nombre;
            $this->Hand = array();
        }
        public function drawCard($deck, $cardsDealt){
            if(count($this->Hand) == 0)
            {
                $this->Hand = $deck->dealCards(7, $deck);
            }
            $selectedCard = $deck->AllCards[rand(0, count($deck->AllCards) - 1)];
            array_push($this->Hand, $selectedCard);
            for($i = 0; $i < count($deck->AllCards); $i++)
            {
                if($deck->AllCards[$i]->Suit == $selectedCard->Suit && $deck->AllCards[$i]->NumericalValue == $selectedCard->NumericalValue)
                {
                    $temp = $deck->AllCards[$i];
                    $deck->AllCards[$i] = $deck->AllCards[count($deck->AllCards) - 1];
                    $deck->AllCards[count($deck->AllCards) - 1] = $temp;
                    array_pop($deck->AllCards);
                }
            }
        }
        public function discardCard($index){
            for($i = 0; $i < count($this->Hand); $i++){
                if($i == $index){
                    $temp = $this->Hand[$i];
                    $this->Hand[$i] = $this->Hand[count($this->Hand) - 1];
                    $this->Hand[count($this->Hand) - 1] = $temp;
                    array_pop($this->Hand);
                }
            }
        }
    }
    $newDeck = new Deck();
    $Jonathon = new Player("Jonathon");
    $Jonathon->drawCard($newDeck, 1);
    echo $Jonathon->Name;
    var_dump($newDeck);
    var_dump($Jonathon->Hand);
    $Jonathon->discardCard(4);
    var_dump($Jonathon->Hand);



?>