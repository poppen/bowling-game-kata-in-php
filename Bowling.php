<?php
// vim: set filetype=php.phpunit expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
class Bowling
{
    private $throws;

    function __construct()
    {
        $this->throws = array();
    }

    public function hit($pins)
    {
        array_push($this->throws, $pins);
    }

    public function score()
    {
        $score = 0;
        for ($i=0; $i < count($this->throws); $i++) {
            echo $score;
            if ($this->throws[$i] + $this->throws[$i+1] == 10) {
                $score += (10 + $this->throws[$i+2]);
                $i += 1;
            } else {
                $score += ($this->throws[$i] + $this->throws[$i+1]);
                $i += 1;
            }
        }
        return $score;
    }
}
?>
