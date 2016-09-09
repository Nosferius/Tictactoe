<?php

class controller

{
    //var $movesmax;
    //var $moves;
    private $user1;
    private $user2;
    private $win;
    private $playerup;

    public function __construct()
    {

        //$this->movesmax = 8;
        //$this->moves = 0;
        $this->playerup = 0;
    }

    public function start($user1, $user2)
    {
        $this->user1 = $user1;
        $this->user2 = $user2;
        $game = new game();
        //$game->
    }

    public function turn ()
    {

    }
}