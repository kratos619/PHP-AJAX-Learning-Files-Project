<?php

include('ini.php');
if(isset($_POST['id'])){
$selected_id  = h($_POST['id']);   

$query = "SELECT * FROM cars where id = '$selected_id' ";

$result = mysqli_query($connection,$query);
if(!$result){
    die("something Went Wrong");
}
while($row = mysqli_fetch_assoc($result)){
    $cars_id = h($row['id']);
    $cars_name = h($row['car']);

    ?>
    <!-- html -->
    <div class="input-field">
        <input type="text" value="<?php echo $cars_name; ?>" name="car_name" class="validate" >
        <label class="active" for="first_name2">Car Name</label>
        <input type="button" value="Update"  name="car_name" class="btn wave" >
        <input type="button" value="Delete"  name="car_name" class="btn red" >
    </div>


    <?php
}
}
//echo 'hello';
?>