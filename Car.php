<?php
class Car{
    private string $make;
    private string $model;
    private int $year;
    private int $price;
    private string $notes;

    public function __construct(string $make, string $model, int $year, int $price, string $notes = ""){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->notes = $notes;
    }

    public function getMake() : string
    {
        return $this->make;
    }
    public function getModel() : string
    {
        return $this->model;
    }
    public function getYear() : int
    {
        return $this->year;
    }
    public function getPrice() : int
    {
        return $this->price;
    }
    public function getNotes() : string
    {
        return $this->notes;
    }

    public function displayCarInfo() : string
    {
        return $this->GetMake() . " " . $this->getModel() . " " . $this->getYear() . " " . $this->getPrice() . "$  " .
            $this->getNotes();
    }
}





































