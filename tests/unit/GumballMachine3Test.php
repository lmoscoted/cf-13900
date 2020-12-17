<?php

use PHPUnit\Framework\TestCase;

require 'GumballMachine3.php';

class GumballMachine3Test extends TestCase
{
    public $gumbalMachineInstance;

    public function setUp()
    {
        $this->gumbalMachineInstance =  new  GumballMachine3();

    }


    public function testIfWheelWorks3(){

        $this->gumbalMachineInstance->setGumballs(100);
        $this->gumbalMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumbalMachineInstance->getGumballs());
    }

    public function testSkipped3(){

        $this->markTestSkipped(
            'Skipped test'
        );
    }


}