<?php 

require_once "Entites/Abstract/IEntity.php";

class Car implements IEntity{

    public $Id, $BrandId, $ColorId, $ModelYear, $DailyPrice, $Description;
}
?>