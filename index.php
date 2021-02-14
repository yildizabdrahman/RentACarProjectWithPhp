<?php

require_once "Entites/Concrete/Car.php";
require_once "Business/Concrete/CarManager.php";
require_once "DataAccess/Concrete/InMemory/InMemoryCarDal.php";

$car1 = new Car();
$car1->Id = 3;
$car1->BrandId = 2;
$car1->ColorId = 3;
$car1->ModelYear = 2018;
$car1->DailyPrice = 170;
$car1->Description = "Günlük Kiralık 3";

$car2 = new Car();
$car2->Id = 4;
$car2->BrandId = 2;
$car2->ColorId = 4;
$car2->ModelYear = 2020;
$car2->DailyPrice = 250;
$car2->Description = "Günlük Kiralık 4";

$car3 = new Car();
$car2->Id = 5;
$car3->BrandId = 2;
$car3->ColorId = 2;
$car1->ModelYear = 2021;
$car3->DailyPrice = 250;
$car3->Description = "Günlük Kiralık 5";

// $carsList = array($car1, $car2);

// foreach ($carsList as $key => $car) {
//     echo $car->Id." ".$car->Description."<br/>";
// }

$carManager = new CarManager(new InMemoryCarDal());

$carManager->Add($car1);
$carManager->Add($car2);
$carManager->Add($car3);

$car2Updated = new Car();
$car2Updated->Id = 4;
$car2Updated->BrandId = 2;
$car2Updated->ColorId = 4;
$car2Updated->ModelYear = 2020;
$car2Updated->DailyPrice = 250;
$car2Updated->Description = "Günlük Kiralık 4 Updated";

$carManager->Update($car2Updated);


$carManager->delete($car1);

//print_r($carManager->GetAll());

foreach ($carManager->GetAll() as  $car) {
    echo $car->Description . "<br/>";
}

echo "<br>";

//print_r($carManager->GetAllByBrand(2));

foreach ($carManager->GetAllByBrand(2) as  $car) {
    echo $car->Description . "<br/>";
}
