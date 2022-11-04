<?php
class DB
{
    private $BC;

    public function __construct()
    { //constructor of the class initializes the counter BC
        $this->BC = 0;
    }

    public function BallFound()
    { // This function is called when a ball is found
        $this->BC++; // Increment the ball count
        if ($this->BC === 7) {
            echo "Hi Faizan"; // print hi faizan
            $this->BC = 0;
        }
    }
}
