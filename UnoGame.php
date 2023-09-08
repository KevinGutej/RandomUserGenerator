<?php

class UnoGame {
    private $players = [];
    private $deck = [];
    private $discardPile = [];

    public function __construct($player1, $player2) {
        $this->players[] = $player1;
        $this->players[] = $player2;
        $this->initializeDeck();
        $this->shuffleDeck();
        $this->//Create FUNCTION here();
    }

    private function initializeDeck() {
        $colors = ['Red', 'Blue', 'Green', 'Yellow'];
        $values = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'Skip', 'Reverse', 'Draw Two'];

    }

    private function shuffleDeck() {
        shuffle($this->deck);
    }
}