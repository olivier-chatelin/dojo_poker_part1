<?php

namespace App;

class Poker
{
    public const ORDER_VALUES = [
        'A' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10,
        'J' => 11,
        'Q' => 12,
        'K' => 13
    ];
    public function retrieveCombinaison(array $cards): string
    {
        $result = 'High card';
        $values = [];
        foreach ($cards as $card) {
            $values[] = $card[0];
        }
        $countValues = array_count_values($values);
        foreach ($countValues as $count) {
            switch ($count) {
                case 2:
                    if($result === 'One pair') {
                        $result = 'Two pairs';

                    } elseif($result === 'Three of a kind'){
                        $result = 'Full house';
                    } else{
                        $result = 'One pair';
                    }

                    break;
                case 3:
                    if($result === 'One pair') {
                        $result = 'Full house';
                    } else{
                        $result = 'Three of a kind';
                    }
                    break;
                case 4:
                    $result = 'Four of a kind';
                    break;
            }
        }
        return $result;
    }
}