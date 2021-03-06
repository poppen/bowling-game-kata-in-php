<?php
// vim: set filetype=php.phpunit expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
require_once 'vendor/autoload.php';
require_once 'Bowling.php';

class BowlingTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->game = new Bowling();
    }

    protected function tearDown()
    {
    }

    public function testAllGutterGame()
    {
        for ($i=0; $i < 20; $i++) {
            $this->game->hit(0);
        }
        $this->assertEquals($this->game->score(), 0);
    }

    public function testAllOneGame()
    {
        for ($i=0; $i < 20; $i++) {
            $this->game->hit(1);
        }
        $this->assertEquals($this->game->score(), 20);
    }

    public function testOneSpare()
    {
        $this->game->hit(5);
        $this->game->hit(5);
        $this->game->hit(3);
        for ($i=0; $i < 17; $i++) {
            $this->game->hit(0);
        }
        $this->assertEquals($this->game->score(), 16);
    }

    public function testOneStrike()
    {
        $this->game->hit(10);
        $this->game->hit(3);
        $this->game->hit(4);
        for ($i=0; $i < 16; $i++) {
            $this->game->hit(0);
        }
        $this->assertEquals($this->game->score(), 24);
    }

    public function testAllStrike()
    {
        for ($i=0; $i < 12; $i++) {
            $this->game->hit(10);
        }
        $this->assertEquals($this->game->score(), 300);
    }
}
?>
