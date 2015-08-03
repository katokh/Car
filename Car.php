<?php
  class Car
  {
    private $make_model;
    private $price;
    private $miles;
    private $image_path;

    function __construct($make_model, $price, $miles, $image_path)
    {

        $this->model = $make_model;
        $this->cost = $price;
        $this->mileage = $miles;
        $this->image = $image_path;

    }

    function setPrice($new_price)
    {

        $float_price = (float) $new_price;
        if ($float_price != 0){
          $formatted_price = number_format($float_price, 2);
          $this->cost = $formatted_price;
        }
    }

    function setModel($new_model)
    {
          $this->model = $new_model;

    }

    function setMileage($new_miles)
    {
          $this->mileage = $new_miles;
    }

    function setImage($new_image)
    {
          $this->image = $new_image;
    }

    function getPrice()
    {
          return $this->cost;
    }

    function getModel()
    {
          return $this->model;
    }

    function getMileage()
    {
          return $this->miles;
    }

    function getImage()
    {
          return $this->image;
    }

  }

    $porsche = new Car("2014 Porsche 911", 114991, 7864, "car/porsche.jpg");
    $ford = new Car("2011 Ford F450", 55995, 14241, "car/ford.jpg");
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "car/lexus.jpg");
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "car/mercedes.jpg");

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car) {
      if ($car->cost < $_GET["price"] && $car->mileage < $_GET["miles"]) {
        array_push($cars_matching_search, $car);
      }
    }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Car Dealership's Homepage</title>
</head>
<body>
  <h1>Your Car Dealership</h1>
  <ul>
    <?php
    if ($cars_matching_search == array()) {
      echo "<h1>Find another car dealer</h1>";
    }

    foreach ($cars_matching_search as $car) {
        $car_image = $car->getImage();
        $car_price = $car->getPrice();
        $car_model = $car->getModel();
        $car_mileage = $car->getMileage();
        echo "<li> $car->model </li>";
        echo "<div><img src='$car->image'> </div>";
        echo "<ul>";
              echo "<li> $$car->cost </li>";
              echo "<li> Miles: $car->mileage </li>";
        echo "</ul>";
      }

    ?>
  </ul>
</body>
</html>
