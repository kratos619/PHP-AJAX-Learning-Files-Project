<?php
require('db.php');
// if($connection){
//     echo "is Connected";
// }



$search = mysqli_real_escape_string($connection ,$_POST['autocomplete_input']);

if(!empty($search)){
    $query = "SELECT * FROM cars WHERE car LIKE '$search%'";
    $search_query = mysqli_query($connection,$query);
    $conunt = mysqli_num_rows($search_query);
    
    if(!$search_query){
        die('query failed ' . mysqli_error($connection));
    }

    if($conunt <= 0 ){
        echo "car not found";
    }else{
        while($row = mysqli_fetch_assoc($search_query)){
            $car = $row['car'];
        ?>
        <div class="collection">
            <a href="#!" class="collection-item"><?php echo $car; ?></a>
        </div>
        <?php

    }
    }

}

?>