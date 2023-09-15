<?php

function assignCardValue(string $card): int {
    if (str_starts_with($card, "K")
        || str_starts_with($card, "J")
        || str_starts_with($card, "Q")) {
        return 10;
    } elseif (str_starts_with($card, "A")) {
        return 11;
    } else {
        return substr($card, 0, -1);
    }
}

$deck = array ("AH", '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H', '10H', 'JH', 'QH', 'KH', 'AS,', '2S', '3S', '4S', '5S', '6S', '7S', '8S', '9S', '10S', 'JS', 'QS', 'KS', 'AD', '2D', '3D', '4D', '5D', '6D', '7D', '8D', '9D', '10D', 'JD', 'QD', 'KD', 'AC', '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', '10C', 'JC', 'QC', 'KC');
$num = 2;
$keys = array_rand( $deck, $num);
echo $deck[$keys[0]]." ".$deck[$keys[1]];

$player1 = [$deck[array_rand($deck, 1)], $deck[array_rand($deck, 1)]];
$player2 = [$deck[array_rand($deck, 1)], $deck[array_rand($deck, 1)]];

$player1_first_card = assignCardValue($player1[0]);
$player1_second_card = assignCardValue($player1[1]);
$player1_total = $player1_first_card + $player1_second_card;


?>



