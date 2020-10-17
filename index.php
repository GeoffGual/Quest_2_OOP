
<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);


$car = new Car('green', 4, 'electric');


$truck = new Truck('blue', 5, 'electric', 50);
var_dump($truck);
echo $truck->forward();
echo $truck->brake();
echo $truck->loadChecking();
$truck->setLoading(50);
echo $truck->loadChecking();