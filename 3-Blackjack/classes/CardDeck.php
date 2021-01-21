<?php

class CardDeck
{
    public $cardNumber;
    public $cardType;

    public function useDeck(int $cardNumber, string $cardType)
    {
        $this->cardNumber = $cardNumber;
        $this->cardType = $cardType;
    }

    
}