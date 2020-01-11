<?php
class Material extends StandartRobot{
    protected $country;
    /**
     * cost (in euro) fot 1 kg;
     */
    protected $cost;
    public function __construct($country,$cost)
    {
        $this->country=$country;
        $this->cost=$cost;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry()
    {
        $this->country=$country;
    }
    public function getCost()
    {
        return $this->cost;
    }
    public function setCost()
    {
        $this->cost=$cost;
    }
}
$material= new Material(Ukraine, 16)
class Quantity extends Material {
    /**
     * weight in kg;
     */
 protected $weight;
 public function getWeight()
 {
     return $this->weight;
 }
}
class Sum extends Quantity{
    protected $sum;
    public function getSum()
    {
        return $this->getCost() * $this->getWeight();
    }
}
?>