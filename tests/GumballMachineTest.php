<?php

use PHPUnit\Framework\TestCase;

require 'GumballMachine.php';

class GumballMachineTest extends TestCase
{
    public $gumbalMachineInstance;

    public function setUp()
    {
        $this->gumbalMachineInstance =  new  GumballMachine();
    }

    public function testIfWheelWorks(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs()-1);
    }

}