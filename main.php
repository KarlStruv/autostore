<?php
require_once "Car.php";
require_once "CarPark.php";

$cars = new CarPark([
    new Car("Honda", "Civic", 2010, 5600, "Has been in a crash"),
    new Car("Audi", "A7", 2019, 29000),
    new Car("Audi", "A6", 2004, 2500, "KLE KLE KLE"),
    new Car("Volvo", "XC90", 2021, 64000),
    new Car("Volvo", "S60", 2007, 3900),
    new Car("BMW", "I8", 2021, 124000),
    new Car("BMW", "Žurka", 1998, 1000, "MOT until 26.04"),
]);

$cars->displayCarPark();

$cars->buyCar();