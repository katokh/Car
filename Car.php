<?php
  class Car
  {
    private $make_model;
    private $price;
    private $miles;
    private $car;


    function __construct($make_model, $price, $miles, $car)
    {

        $this->model = $make_model;
        $this->cost = $price;
        $this->milage = $miles;
        $this->vehicle = $car;

    }


    function setPrice($new_price)
    {
      $float_price = (float) $new_price;
      if ($float_price !=0){
          $this->price = $float_price;
    }

    function getPrice()
    {
        return $this->price;

    }

    }

    function setMiles($new_miles)

    {

        $this->miles = ($new_miles);

    }

  }

    $porsche = new Car();
    $porsche->make_model = "2014 Porsche 911";
    $porsche->price = 114991;
    $porsche->miles = 7864;

    $ford = new Car();
    $ford->make_model = "2011 Ford F450";
    $ford->price = 55995;
    $ford->miles = 14241;

    $lexus = new Car();
    $lexus->make_model = "2013 Lexus RX 350";
    $lexus->price = 44700;
    $lexus->miles = 20000;

    $mercedes = new Car();
    $mercedes->make_model = "Mercedes Benz CLS550";
    $mercedes->price = 39900;
    $mercedes->miles = 37979;

    $nissan = new Car();
    $nissan->make_model = "2010 Nissan Versa";
    $nissan->price = 4000;
    $nissan->miles = 128000;

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car) {
      if ($car->price < $_GET["price"]) {
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
      foreach ($cars_matching_search as $car) {
        $car_prices= $car->getPrice();
        echo "<li> $car->make_model </li>";
        echo "<ul>";
              echo "<li> $$car->price </li>";
              echo "<li> Miles: $car->miles </li>";
        echo "</ul>";
        }
    ?>
  </ul>
</body>
</html>
