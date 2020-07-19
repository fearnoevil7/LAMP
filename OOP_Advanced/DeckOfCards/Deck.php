<?php
    require('Card.php');
    class Deck
    {
        public $AllCards = array();
        public $suits = ["Clubs", "Spades", "Hearts", "Diamonds"];
        public $stringvalues = ["Ace", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King"];
        public $numericalvalues = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"];
        public function AddCards()
        {
            for($suit1 = 0; $suit1 < count($this->suits); $suit1++)
            {
                for($value = 0; $value < count($this->stringvalues); $value++)
                {
                    $card1 = new Card($this->suits[$suit1], $this->stringvalues[$value], $this->numericalvalues[$value]);
                    array_push($this->AllCards, $card1);
                }
            }
        }
        public function __construct()
        {
            $this->AddCards();
            $this->shuffle();
        }
        public function shuffle(){
            for($currentCardLocation = count($this->AllCards) - 1; $currentCardLocation > 0; $currentCardLocation--)
            {
                $randomCardLocation = rand(0, ($currentCardLocation));
                $temp = $this->AllCards[$currentCardLocation];
                $this->AllCards[$currentCardLocation] = $this->AllCards[$randomCardLocation];
                $this->AllCards[$randomCardLocation] = $temp;
            }
        }
        public function reset(){
            $this->AllCards = array();
            $this->AddCards();
            $this->shuffle();
        }
        public function dealCards($numofCardsDealt, $deck){
            $playersHand = array();
            for($cardsdealt = 0; $cardsdealt < $numofCardsDealt; $cardsdealt++)
            {
                $card2 = $this->AllCards[rand(0, count($this->AllCards) - 1)];
                array_push($playersHand, $card2);
                echo "<br>" . ($cardsdealt + 1) . ") " . $card2->StringValue;
                echo "!!" . $card2->Suit . "<br>";
                echo "Drawn Card.... String Value: " . $card2->StringValue . ", Numerical Value: " . $card2->NumericalValue . ", Suit: " . $card2->Suit . "<br>";
                for($i = 0; $i < count($this->AllCards); $i++)
                {
                    echo $i . ") String Value: " . $this->AllCards[$i]->StringValue . ", Numerical Value: " . $this->AllCards[$i]->NumericalValue . ", Suit: " . $card2->Suit . "<br>";
                    if($this->AllCards[$i]->Suit == $card2->Suit && $this->AllCards[$i]->StringValue == $card2->StringValue && $this->AllCards[$i]->NumericalValue == $card2->NumericalValue)
                    {
                        echo "%%" . $this->AllCards[$i]->StringValue;
                        echo "%%" . $this->AllCards[$i]->Suit . "<br>";
                        $temp = $this->AllCards[$i];
                        $this->AllCards[$i] = $this->AllCards[count($this->AllCards)-1];
                        $this->AllCards[count($this->AllCards) - 1] = $temp;
                        array_pop($this->AllCards);
                    }
                    // if($i = count($this->AllCards) -1){
                    //     echo "**" . $this->AllCards[$i]->StringValue;
                    //     echo "**" . $this->AllCards[$i]->Suit . "<br>";
                    // }
                }
                
            }
            return $playersHand;

        }
    }
    // $newDeck = new Deck();
    // echo count($newDeck->AllCards);
    // $Hand = $newDeck->dealCards(7);
    // var_dump($newDeck);
    // var_dump($Hand);
?>