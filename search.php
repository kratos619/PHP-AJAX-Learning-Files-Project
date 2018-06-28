<?php

$connection = mysqli_connect('localhost','root','','ajax');

// if($connection){
//     echo "is Connected";
// }



$search = mysqli_real_escape_string($connection ,$_POST['autocomplete_input']);

if(!empty($search)){
    $query = "SELECT * FROM cars WHERE car LIKE '$search%'";
    $search_query = mysqli_query($connection,$query);
    if(!$search_query){
        die('query failed ' . mysqli_error($connection));
    }

}


?>