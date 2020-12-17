<?php


class GumballMachine2
{
    private $gumballs;

    /**
     * @return mixed
     */
    public function getGumballs()
    {
        return $this->gumballs;
    }

    /**
     * @param $amount
     */
    public function setGumballs($amount)
    {
        $this->gumballs = $amount;
    }

    public function turnWheel(){

        $this->setGumballs($this->getGumballs() - 1);
    }
}