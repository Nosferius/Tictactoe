<?php

class game
{
    private $id;
    private $con;
    private $user1;
    private $user2;
    private $playerup;
    private $win;
    private $moves;

    function __construct()
    {
        $this->config = parse_ini_file('config.php');
        $this->con = new PDO('mysql:host=localhost;port=8888;dbname='.$this->config['db'],
            $this->config['un'], $this->config['pw']);
        print_r($this->con);
    }

    public function add()
    {
        $sql = "INSERT INTO
                game (user1, user2, playerup, win, moves)
                VALUES (?,?,?,?,?)";
        $sth = $this->con->prepare($sql);
        if (!$sth) {
            echo "\nPDO::errorInfo():\n";
            print_r($this->con->errorInfo());
            die();
        }
        $sth->bindParam(1, $this->user1, PDO::PARAM_STR);
        $sth->bindParam(2, $this->user2, PDO::PARAM_STR);
        $sth->bindParam(3, $this->playerup, PDO::PARAM_INT);
        $sth->bindParam(4, $this->win, PDO::PARAM_STR);
        $sth->bindParam(5, $this->moves, PDO::PARAM_INT);
        $sth->execute();
    }

    public function fetch()
    {
        $sql = 'SELECT * FROM Composers';
        $return = [];
        foreach ($this->con->query($sql) as $row)
        {
            $game = new game();
            $game->setId($row["ID"]);
            $game->setUser1($row["User1"]);
            $game->setUser2($row["User2"]);
            $game->setPlayerup($row[["Playerup"]]);
            $game->setWin($row["Win"]);
            $game->setMoves($row["Moves"]);
            $return[] = $game;
        }
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     * @return game
     */
    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return game
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return PDO
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * @param PDO $con
     * @return game
     */
    public function setCon($con)
    {
        $this->con = $con;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * @param mixed $user1
     * @return game
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * @param mixed $user2
     * @return game
     */
    public function setUser2($user2)
    {
        $this->user2 = $user2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * @param mixed $win
     * @return game
     */
    public function setWin($win)
    {
        $this->win = $win;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMoves()
    {
        return $this->moves;
    }

    /**
     * @param mixed $moves
     */
    public function setMoves($moves)
    {
        $this->moves = $moves;
    }

    /**
     * @return mixed
     */
    public function getPlayerup()
    {
        return $this->playerup;
    }

    /**
     * @param mixed $playerup
     * @return game
     */
    public function setPlayerup($playerup)
    {
        $this->playerup = $playerup;
        return $this;
    }
}