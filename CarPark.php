<?php
class CarPark{
    private array $cars;

    public function __construct(array $cars)
    {
        foreach ($cars as $car){
            $this->addCar($car);
        }
    }

    public function addCar(Car $car)
    {
        $this->cars[] = $car;
    }

    public function displayCarPark()
    {
        foreach ($this->cars as $key => $car){
            echo "{$key}. {$car->displayCarInfo()}" . PHP_EOL;
        }
    }

    public function buyCar()
    {
        $selection = (int)readline("Which car would you like to buy? ");

        if ($selection < 0 || $selection > (count($this->cars) - 1)){
            echo "Invalid selection." . PHP_EOL;
            exit;
        }

        $carToBuy = $this->cars[$selection];

        echo "Congratulations! You just bought a {$carToBuy->getYear()} {$carToBuy->getMake()} {$carToBuy->getModel()} for {$carToBuy->getPrice()}$" . PHP_EOL;

    }
}


