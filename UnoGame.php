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

    public function play() {
        $currentPlayerIndex = 0;

    while (true) {
        $currentPlayer = $this->players[$currentPlayerIndex];
        echo "Current player: {$currentPlayer->getName()}\n";
        echo "Top card in discard pile: {$this->discardPile[count($this->discardPile) - 1]}\n";
        echo "Your hand: " . implode(", ", $currentPlayer->getHand()) . "\n";

        $playableCards = $this->getPlayableCards($currentPlayer);

            if (empty($playableCards)) {
                echo "No playable cards. Drawing a card...\n";
                $this->drawCard($currentPlayer);
            } else {
                $selectedCard = $currentPlayer->chooseCardToPlay($playableCards);
                $this->playCard($currentPlayer, $selectedCard);
            }
            
            if (empty($currentPlayer->getHand())) {
                echo "{$currentPlayer->getName()} wins!\n";
                break;
            }
            
            $currentPlayerIndex = ($currentPlayerIndex + 1) % count($this->players); //still need to create this functions , just implementing them
        }
    }
}

Class Player {
    private $name;
    private $hand = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getHand() {
        return $this->hand;
    }

    public function addCardToHand($card) {
        $this->hand[] = $card;
    }
    public function chooseCardToPlay($playableCards) {
        //Ask player for input(card choice)
        return $playableCards[0];
    }
}
$player1 = new Player("Player 1");
$player2 = new Player("Player 2");
$unoGame = new UnoGame($player1, $player2);
$unoGame->play();
