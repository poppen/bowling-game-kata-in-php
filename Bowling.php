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
        for ($index=0; $index < count($this->throws); $index++) {
            if ($this->throws[$index] == 10) {
                $score += (10 + $this->throws[$index+1] + $this->throws[$index+2]);
            } else if ($this->throws[$index] + $this->throws[$index+1] == 10) {
                $score += (10 + $this->throws[$index+2]);
                $index += 1;
            } else {
                $score += ($this->throws[$index] + $this->throws[$index+1]);
                $index += 1;
            }
        }
        return $score;
    }
}
?>
