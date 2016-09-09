<?php

class postHandler
{

    /**
     * postHandler constructor.
     */
    public function __construct()
    {
    }

    /**
     * postHandler run.
     */
    public function run()
    {
        if (!isset($_POST["action"])){
            return;
        }
        if ($_POST["action"] == "addGame"){
            $game = new controller();
            $game->start(
                $_POST['User1'],
                $_POST['User2']
            );
            /*
                if ($_POST["action"] == "addGame"){
                $game = new game();
                $game->setUser1($_POST["User1"]);
                $game->setUser2($_POST["User2"]);
                $game->setWin($_POST["Win"]);
                $game->setMoves($_POST["Moves"]);
                $game->add();
            */
        }
    }
}