<?php
require_once "Business/Abstract/IcarService.php";
require_once "DataAccess/Abstract/ICarDal.php";

class CarManager implements IcarService{

    public $_ICarDal;

    public function __construct($ICarDal)
    {
        $this->_ICarDal = $ICarDal;
    }
    public function GetAll(){

        return  $this->_ICarDal->GetAll();
    }
    public function GetAllByBrand($brandId){

       return $this->_ICarDal->GetAllByBrand($brandId);

    }
    public function Add($car){

        $this->_ICarDal->Add($car);

    }
    public function Update($car){
        $this->_ICarDal->Update($car);

    }
    public function Delete($car){

        $this->_ICarDal->Delete($car);
    }
}
