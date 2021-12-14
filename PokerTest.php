<?php

namespace App;

use PHPUnit\Framework\TestCase;
require 'Poker.php';

class PokerTest extends TestCase
{
    public function testRetrieveCombinaison()
    {
        $poker = new Poker();
        $this->assertEquals('High card',$poker->retrieveCombinaison([['A','H'],['2','C'],['4','S'],['8','D'],['10','S']]));
        $this->assertEquals('One pair',$poker->retrieveCombinaison([['A','H'],['A','C'],['4','S'],['8','D'],['10','S']]));
        $this->assertEquals('Three of a kind',$poker->retrieveCombinaison([['A','H'],['A','C'],['A','S'],['8','D'],['10','S']]));
        $this->assertEquals('Four of a kind',$poker->retrieveCombinaison([['A','H'],['A','C'],['A','S'],['A','D'],['10','S']]));
        $this->assertEquals('Two pairs',$poker->retrieveCombinaison([['A','H'],['A','C'],['3','S'],['3','D'],['10','S']]));
        $this->assertEquals('Full house',$poker->retrieveCombinaison([['A','H'],['A','C'],['3','S'],['3','D'],['3','S']]));
    }
}
