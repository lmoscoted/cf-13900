<?php

use PHPUnit\Framework\TestCase;

require 'GumballMachine.php';

class GumballMachineTest extends TestCase
{
    public $gumbalMachineInstance;

    public function setUp()
    {
        $this->gumbalMachineInstance =  new  GumballMachine();
        /*$this->markTestSkipped(
            'Skipped test'
        );*/
    }

    public function testIfWheelWorks(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs());
    }

/*    public function testSkipped(){

        $this->markTestSkipped(
            'Skipped test'
        );
    }
    public function testSkipped2(){

        $this->markTestSkipped(
            'Skipped test 2'
        );
    }

    public function testSkipped3(){

        $this->markTestSkipped(
            'Skipped test 3'
        );
    }*/

}