<?php
class Elements extends StandartRobot{
protected $hands;
protected $legs;
public function __construct($hands,$legs)
{
    parent::__construct($armslength, $legslength, $quantity);
    $this->hands=$hands;
    $this->legs=$legs;
    $this->armslength=$armslength;
    $this->legslength=$legslength;
}
public function getHands()
{
    return $this->hands;
}
public function getLegs()
{
    return $this->legs;
}
public function setHands()
{
    $this->hands=$hands;
}
public function setLegs()
{
     $this->legs=$legs;
}
}
$limbs= new Elements(2,4);
class Hands extends Elements {
protected $power;
protected $fingers;
public function __construct($power,$fingers)
{
    $this->power=$power;
    $this->fingers=$fingers;
}
public function getPower()
{
    return $this->power;
}
public function getFingers()
{
    return $this->fingers;
}
public function setFingers()
{
    $this->fingers=$fingers;
}
}
class Legs extends Elements{
protected $speed;
public function getSpeed()
{
    return $this->speed;
}
}
?>