<?php
class car
{
    public $brand;
    public $manufacture_date;
    public $color;
    public function __construct($brand, $manufacture_date, $color)
    {
        $this->brand = $brand;
        $this->manufacture_date = $manufacture_date;
        $this->color = $color;
    }

    public function carData()
    {
        echo "hey sri $this->brand of car was manufacture in $this->manufacture_date with color $this->color";
    }

}

$carData=new car("morlala","2023-9-05","red");
$carData->carData();
