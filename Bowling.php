<?php
// vim: set filetype=php.phpunit expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
class Bowling
{
    private $score;

    function __construct()
    {
        $this->score = 0;
    }

    public function hit($pins)
    {
        $this->score += $pins;
    }

    public function score()
    {
        return $this->score;
    }
}
?>
