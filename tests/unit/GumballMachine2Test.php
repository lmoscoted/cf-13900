<?php

use PHPUnit\Framework\TestCase;

require 'GumballMachine2.php';

class GumballMachine2Test extends TestCase
{
    public $gumbalMachineInstance;

    public function setUp()
    {
        $this->gumbalMachineInstance =  new  GumballMachine2();

    }


    public function testIfWheelWorks2(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs());
    }

    public function testSkipped2(){

        $this->markTestSkipped(
            'Skipped test'
        );
    }


}