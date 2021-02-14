<?php 

interface ICarDal{

    public function GetAll();
    public function GetAllByBrand($brandId);
    public function Add($car);
    public function Update($car);
    public function Delete($car);
    
}

?>