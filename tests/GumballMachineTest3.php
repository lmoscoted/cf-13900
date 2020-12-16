<?php

use PHPUnit\Framework\TestCase;

require 'GumballMachine.php';

class GumballMachineTest3 extends TestCase
{
    public $gumbalMachineInstance;

    public function setUp()
    {
        $this->gumbalMachineInstance =  new  GumballMachine();

    }

    public function testIfWheelWorks(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs());
    }

    public function testIfWheelWorks2(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs());
    }

    public function testSkipped(){

        $this->markTestSkipped(
            'Skipped test'
        );
    }


}