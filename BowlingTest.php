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
}
?>
