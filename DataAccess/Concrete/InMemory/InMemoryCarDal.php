<?php

require_once "DataAccess/Abstract/ICarDal.php";
require_once "Entites/Concrete/Car.php";

class InMemoryCarDal implements ICarDal
{

    public $_cars = array();

    public function __construct()
    {
        $car1 = new Car();
        $car1->Id = 1;
        $car1->BrandId = 1;
        $car1->ColorId = 1;
        $car1->ModelYear = 2011;
        $car1->DailyPrice = 100;
        $car1->Description = "Günlük Kiralık 1";

        $car2 = new Car();
        $car2->Id = 2;
        $car2->BrandId = 1;
        $car2->ColorId = 2;
        $car2->ModelYear = 2015;
        $car2->DailyPrice = 150;
        $car2->Description = "Günlük Kiralık 2";

        $_tempArray = array($car1, $car2);

        $this->_cars =  $_tempArray;
    }

    public function GetAll()
    {

        return  $this->_cars;
    }
    public function GetAllByBrand($brandId)
    {
        $_tempArray = array();

        foreach ($this->_cars as $key => $_car) {

            if ($_car->BrandId == $brandId) {

                array_push($_tempArray, $_car);

            }
        }
        return $_tempArray;
    }
    public function Add($car)
    {

        array_push($this->_cars, $car);
    }
    public function Update($car)
    {

        foreach ($this->_cars as $key => $_car) {

            if ($_car->Id == $car->Id) {
                $this->_cars[$key]->BrandId      =  $car->BrandId;
                $this->_cars[$key]->ColorId      =  $car->ColorId;
                $this->_cars[$key]->ModelYear    =  $car->ModelYear;
                $this->_cars[$key]->DailyPrice   =  $car->DailyPrice;
                $this->_cars[$key]->Description  =  $car->Description;
            }
        }
    }

    public function Delete($car)
    {

        foreach ($this->_cars as $key => $_car) {

            if ($_car->Id == $car->Id) {

                unset($this->_cars[$key]);
            }
        }
    }
}
