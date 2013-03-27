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
        $index = 0;
        for ($frame=0; $frame < 10; $frame++) {
            if ($this->is_strike($index)) {
                $score += $this->strike_score($index);
                $index++;
            } else if ($this->is_spare($index)) {
                $score += $this->spare_score($index);
                $index += 2;
            } else {
                $score += ($this->throws[$index] + $this->throws[$index+1]);
                $index += 2;
            }
        }
        return $score;
    }

    private function is_strike($index)
    {
        return $this->throws[$index] == 10;
    }

    private function is_spare($index)
    {
        return $this->throws[$index] + $this->throws[$index+1] == 10;
    }

    private function strike_score($index)
    {
        return 10 + $this->throws[$index+1] + $this->throws[$index+2];
    }

    private function spare_score($index)
    {
        return 10 + $this->throws[$index+2];
    }
}
?>
