<?php
include "elements.php";
include "material.php";
?>

<?php
class StandartRobot{
    /**
     * whole date in sm;
     */
    protected $armslength;
    protected $legslength;
    /**
     * every material has own id;
     * quantity in grams;
     */
    protected $quantity;
    public function __construct($armslength, $legslength, $quantity)
    {
        $this->armslength=$armslength;
        $this->legslength=$legslength;
        $this->quantity=$quantity;

    }

    /**
     * @return mixed
     */
    public function getArmslength()
    {
        return $this->armslength;
    }

    /**
     * @return mixed
     */
    public function getLegslength()
    {
        return $this->legslength;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $armslength
     */
    public function setArmslength($armslength)
    {
        $this->armslength = $armslength;
    }

    /**
     * @param mixed $legslength
     */
    public function setLegslength($legslength)
    {
        $this->legslength = $legslength;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
$machine = new Robot(20, 25, 340);
?>