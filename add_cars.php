<?php
include('db.php');
include('functions.php');

if(isset($_POST['car_name'])){
    $car_name = escape_string($_POST['car_name']);
    $query = "INSERT INTO cars(car) VALUES('$car_name')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed");
    }
    echo "car Successfully added";
    

}

?>
